/**
 * Functions for working with cookies
 * Documentation: https://github.com/iliakan/javascript-tutorial-ru/blob/master/11-extra/10-Cookie/article.md
 */


/**
 * Get the value of the existing cook
 *
 * @param {string} name - name Cookies
 * @return {string} - Cook
 *
 */
function getCookie(name) {
	var matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
	return matches ? decodeURIComponent(matches[1]) : undefined;
}


/**
 * Install cookies
 *
 * @param {string} name - name Cookies
 * @param {String} Value - Cook
 * @param {Object} Options - an object with additional properties for installing Cookies:
 * Expires: Cookie expiration time.It is interpreted differently, depending on the type:
 * - Number - the number of seconds before the expiration.For example, `Expires: 3600` - Cook for an hour.
 * - an object of the type [date] (https://developer.mozilla.org/en/docs/web/javascript/reference/global_objects/date) - date of expiration.
 * - If Expires is in the past, then cookies will be deleted.
 * - If Expires is absent or `0`, then cookies will be installed as session and disappears when the browser is closed.
 * Path: Way for cookie.
 * Domain: domain for cookie.
 * Secure: if it is true, then send cookies only by a secure connection.
 */
function setCookie(name, value, options = {}) {
  options = {
    path: '/',
    ...options
  };

  if (options.expires instanceof Date) {
    options.expires = options.expires.toUTCString();
  }

  let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

  for (let optionKey in options) {
    updatedCookie += "; " + optionKey;
    let optionValue = options[optionKey];
    if (optionValue !== true) {
      updatedCookie += "=" + optionValue;
    }
  }
	
  document.cookie = updatedCookie;
}


/**
 * Delete Cooks
 *
 * @param {string} name - name Cookies
 */
function deleteCookie(name) {
  setCookie(name, "", {
    'max-age': -1
  })
}