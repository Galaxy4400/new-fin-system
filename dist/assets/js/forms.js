const initCountryPhones = (form) => {
  const intlTelInput = form.querySelector('input[data-phone]');

  if (!intlTelInput) return;

  form.iti = window.intlTelInput(intlTelInput, {
    strictMode: true,
    separateDialCode: true,
    initialCountry: window.userCountry,
    loadUtils: () => import('https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/js/utils.js'),
  });
};

document.querySelectorAll('form[data-form]').forEach((form) => {
  initCountryPhones(form);
  // validateForm(form);
});
