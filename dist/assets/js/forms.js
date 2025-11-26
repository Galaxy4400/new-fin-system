//===============================================================
const local = (path) => {
  return path.split('.').reduce((obj, key) => obj?.[key], window.translations) ?? path;
};

//===============================================================
const initCountryPhones = (form) => {
  const intlTelInput = form.querySelector('input[data-phone]');

  if (!intlTelInput) return;

  intlTelInput.setAttribute('autocomplete', 'tel');
  intlTelInput.removeAttribute('placeholder');

  form.iti = window.intlTelInput(intlTelInput, {
    strictMode: false,
    separateDialCode: true,
    initialCountry: window.geo?.data?.country_code?.toLowerCase() || window.userCountry.toLowerCase(),
    loadUtils: () => import('https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/js/utils.min.js'),
  });

  intlTelInput.addEventListener('input', (e) => {
    const cleaned = e.target.value.replace(/[^0-9-\s]+/g, '');
    if (cleaned !== e.target.value) e.target.value = cleaned;
  });
};

//===============================================================
const resetForm = (form) => {
  form.reset();

  form.iti.setNumber('');

  form.querySelectorAll('[data-valid], [data-novalid]').forEach((input) => {
    input.removeAttribute('data-valid');
    input.removeAttribute('data-novalid');
  });

  form.removeAttribute('data-novalid');
  form.removeAttribute('data-submited');
};

//===============================================================
const showFormMessage = (form, { type = 'success', title = '', text = '' }, link) => {
  const messageBlock = form.querySelector('[data-form-message]');

  messageBlock.removeAttribute('data-success');
  messageBlock.removeAttribute('data-error');

  messageBlock.setAttribute(type === 'success' ? 'data-success' : 'data-error', '');

  if (typeof text === 'object') text = Object.values(text);

  const titleEl = messageBlock.querySelector('[data-form-message-title]');
  const contentEl = messageBlock.querySelector('[data-form-message-content]');

  titleEl.innerHTML = title;
  contentEl.innerHTML = Array.isArray(text)
    ? `<ul>${text.map((t) => `<li>${t}</li>`).join('')}</ul>`
    : text.replace('{{timer}}', `<span>5</span>`);

  if (typeof text === 'string' && text.includes('{{timer}}')) {
    let time = 5;
    const intervalId = setInterval(() => {
      time--;
      contentEl.innerHTML = local('t.response.redirect_timer').replace('{{timer}}', `<span>${time}</span>`);
      if (time <= 0) {
        clearInterval(intervalId);
        window.location.href = link;
      }
    }, 1000);
  }
};

//===============================================================
const responseHandler = (form, { success, code, errors, auto_login_url, tech }) => {
  if (success) {
    resetForm(form);

    if (auto_login_url) {
      return showFormMessage(
        form,
        {
          title: local('t.response.reg_complete'),
          text: local('t.response.redirect_timer'),
        },
        auto_login_url,
      );
    }

    return showFormMessage(form, {
      title: local('t.response.reg_complete'),
    });
  }

  // Errors
  if (code === 'invalid_params') {
    return showFormMessage(form, {
      type: 'error',
      title: local('t.response.something_wrong'),
      text: errors,
    });
  }

  if (tech) {
    return showFormMessage(form, {
      type: 'error',
      title: local('t.response.something_wrong'),
      text: local('t.response.ask_support'),
    });
  }

  return showFormMessage(form, {
    type: 'error',
    title: local('t.response.something_wrong'),
    text: local('t.response.try_again'),
  });
};

//===============================================================
const validateForm = (form) => {
  const formSubmitted = localStorage.getItem('form_submitted');

  if (formSubmitted) {
    showFormMessage(form, {
      title: local('t.response.already_reg'),
    });

    return;
  }

  let isFormValid = true;
  form.removeAttribute('data-novalid');

  const inputs = form.querySelectorAll('[data-should-validate]');

  for (const input of inputs) {
    const type = input.type ? input.type : false;
    const required = input.required ? true : false;
    const regexp = input.dataset.regexp ? input.dataset.regexp : false;

    // clean status
    input.removeAttribute('data-valid');
    input.removeAttribute('data-novalid');

    let isValid = true;
    const value = input.value.trim();

    // required
    if (isValid && required) {
      if (!value) isValid = false;
    }

    // email
    if (isValid && type === 'email') {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(value)) isValid = false;
    }

    // tel
    if (isValid && type === 'tel') {
      if (!form.iti.isValidNumber()) isValid = false;
    }

    // regexp
    if (isValid && regexp) {
      const customRegex = new RegExp(regexp, 'gi');
      if (!customRegex.test(value)) isValid = false;
    }

    // status
    if (isValid) {
      input.setAttribute('data-valid', '');
    } else {
      input.setAttribute('data-novalid', '');
      isFormValid = false;
    }
  }

  if (!isFormValid) {
    form.setAttribute('data-novalid', '');
  }

  return isFormValid;
};

//===============================================================
const initSubmit = (form) => {
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    form.setAttribute('data-submited', '');

    if (!validateForm(form)) return;

    const formAction = form.action ? form.getAttribute('action').trim() : '#';
    const formMethod = form.method ? form.getAttribute('method').trim() : 'GET';

    const formData = new FormData(form);

    form.setAttribute('data-loading', '');

    if (form.iti) formData.set('phone', formData.get('phone').replace(/^0+/, ''));
    if (form.iti) formData.append('full_phone', form.iti.getNumber());
    if (form.iti) formData.append('country_code', '+' + form.iti.getSelectedCountryData().dialCode);

    fetch(formAction, {
      method: formMethod,
      body: formData,
    })
      .then((response) => response.json())
      .then((res) => {
        responseHandler(form, res);
      })
      .catch((err) => responseHandler(form, { tech: err }))
      .finally(() => {
        form.removeAttribute('data-loading');
      });
  });

  form.addEventListener('input', () => {
    if (form.hasAttribute('data-submited')) {
      validateForm(form);
    }
  });
};

//===============================================================
const initForms = () => {
  document.querySelectorAll('form[data-form]').forEach((form) => {
    initCountryPhones(form);
    initSubmit(form);
  });
};

//===============================================================
window.forms = { init: initForms };
