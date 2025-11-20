const initCountryPhones = (form) => {
  const intlTelInput = form.querySelector('input[data-phone]');

  if (!intlTelInput) return;

  form.iti = window.intlTelInput(intlTelInput, {
    strictMode: true,
    separateDialCode: true,
    initialCountry: 'auto',
    loadUtils: () => import('https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/js/utils.min.js'),
    hiddenInput: () => ({
      phone: 'full_phone',
      country: 'country_code',
    }),
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

document.querySelectorAll('form[data-form]').forEach((form) => {
  initCountryPhones(form);
});
