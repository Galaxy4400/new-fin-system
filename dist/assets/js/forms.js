const local = (key) => window.workWithLang.local(key);

//===============================================================
const mokFetch = (ms = 1000, payload = 'payload', success = true) =>
  new Promise((resolve, reject) =>
    setTimeout(() => {
      success ? resolve(payload) : reject(payload);
    }, ms),
  );

//===============================================================
const initCountryPhones = (form) => {
  const intlTelInput = form.querySelector('input[data-phone]');

  if (!intlTelInput) return;

  form.iti = window.intlTelInput(intlTelInput, {
    strictMode: true,
    separateDialCode: true,
    initialCountry: 'auto',
    loadUtils: () => import('https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/js/utils.min.js'),
    geoIpLookup: (success) => {
      const cacheUserCountry = localStorage.getItem('user_country');

      if (cacheUserCountry) {
        success(cacheUserCountry);
        return;
      }

      fetch('https://ipapi.co/json')
        .then((res) => res.json())
        .then((data) => {
          localStorage.setItem('user_country', data.country_code);
          success(data.country_code);
        })
        .catch(() => {
          success(window.userCountry);
        });
    },
  });
};

//===============================================================
const validateForm = (form) => {
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
const showFormMessage = (form, { type = 'success', title = '', text = '' }) => {
  const messageBlock = form.querySelector('[data-form-message]');

  messageBlock.removeAttribute('data-success');
  messageBlock.removeAttribute('data-error');

  messageBlock.setAttribute(type === 'success' ? 'data-success' : 'data-error', '');

  messageBlock.querySelector('[data-form-message-title]').innerHTML = title;
  messageBlock.querySelector('[data-form-message-content]').innerHTML = Array.isArray(text)
    ? `<ul>${text.map((t) => `<li>${t}</li>`).join('')}</ul>`
    : text;
};

//===============================================================
const responseHandler = (form, { success, code, errors, auto_login_url }) => {
  if (success) {
    clearForm(form);

    if (auto_login_url) {
      setCookie('autologin', auto_login_url, { expires: 172800 });

      return showFormMessage(form, {
        title: local('t.main.reg_complete'),
        text: local('t.main.redirect_timer'),
      });
    }

    return showFormMessage(form, {
      title: local('t.main.reg_complete'),
    });
  }

  // Errors
  if (code === 'invalid_params') {
    return showFormMessage(form, {
      type: 'error',
      title: local('t.main.something_wrong'),
      text: Array.isArray(errors) ? Object.keys(errors || []) : [errors],
    });
  }

  return showFormMessage(form, {
    type: 'error',
    title: local('t.main.something_wrong'),
    text: local('t.main.try_again'),
  });
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

    mokFetch(1000, Object.fromEntries(formData), true)
      .then((res) => {
        console.log('THEN:', res);
        resetForm(form);
      })
      .catch((err) => {
        console.log('CATCH:', err);
      })
      .finally(() => {
        form.removeAttribute('data-loading');
      });

    // fetch(formAction, {
    //   method: formMethod,
    //   body: formData,
    // })
    //   .then((response) => response.json())
    //   .then((payload) => {
    //     console.log(payload);
    //     // responseHandler(form, payload);
    //   })
    //   .catch((error) => console.log(error.message))
    //   .finally(() => {
    //     form.removeAttribute('data-loading');
    //   });
  });

  form.addEventListener('input', () => {
    if (form.hasAttribute('data-submited')) {
      validateForm(form);
    }
  });
};

//===============================================================
formsHandle();
