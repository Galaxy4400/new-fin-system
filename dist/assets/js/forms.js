const initCountryPhones = (form) => {
  const countryPhoneInput = form.querySelector('input[data-phone]');

  if (!countryPhoneInput) return;

  form.iti = window.intlTelInput(countryPhoneInput, {
    strictMode: true,
    separateDialCode: true,
    initialCountry: window.userCountry,
    utilsScript: '/public/js/intlTelInput-utils.min.js',
  });
};

document.querySelectorAll('form[data-form]').forEach((form) => {
  // initCountryPhones(form);
  // validateForm(form);

  console.log(form);
});
