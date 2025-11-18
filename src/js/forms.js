//===============================================================
document.querySelectorAll("input[data-eye]").forEach((password) => {
	if (password.type != "password") {
		console.error("The element should be input[type='password']");
		return;
	}

	const passwordContainer = document.createElement("div");
	const passwordEye = document.createElement("span");

	passwordContainer.classList.add("password");
	passwordEye.classList.add("password__eye");

	password.after(passwordContainer);
	passwordContainer.prepend(password);

	passwordContainer.append(passwordEye);

	passwordEye.addEventListener("click", () => {
		passwordEye.classList.toggle("_active");

		if (passwordEye.classList.contains("_active")) {
			password.type = "text";
		} else {
			password.type = "password";
		}
	});
});

//===============================================================
document.querySelectorAll("input[data-radio]").forEach((radio) => {
	if (radio.type != "radio") {
		console.error("The element should be input[type='radio']");
		return;
	}

	radio.dataset.label = local(radio.dataset.label);

	const isCustom = radio.dataset.custom !== undefined ? true : false;
	const radioContainer = document.createElement("label");
	const radioLabel = isCustom ? radio.nextElementSibling : document.createElement("span");

	if (
		isCustom &&
		(radioLabel.tagName.toLowerCase() != "span" || radioLabel.dataset.radioCustom == undefined)
	) {
		console.error(
			"The capture field of the radio video should be Span and have an attribute data-radio-custom"
		);
		return;
	}

	radioContainer.classList.add("radio");
	radioContainer.classList.add(isCustom ? "radio_custom" : "radio_default");

	if (radio.className) {
		radioContainer.classList.add(radio.className.split(" ")[0]);
		radio.className = radio.className.split(" ")[0] + "__input";
	}

	if (!isCustom) {
		radioLabel.innerHTML = radio.dataset.label;
		radioLabel.className = "radio__mark";
	}

	if (radio.checked) radioContainer.classList.add("_checked");

	radioContainer.append(radioLabel);

	radio.after(radioContainer);
	radioContainer.prepend(radio);

	radio.addEventListener("change", () => {
		document.querySelectorAll(`input[data-radio][name="${radio.name}"]`).forEach((radio) => {
			radio.parentElement.classList.remove("_checked");
		});
		radio.parentElement.classList.add("_checked");
	});
});

//===============================================================
document.querySelectorAll("input[data-check]").forEach((check) => {
	if (check.type != "checkbox") {
		console.error("The element should be input[type='checkbox']");
		return;
	}

	const isCustom = check.dataset.custom !== undefined ? true : false;
	const checkContainer = document.createElement("label");
	const checkLabel = isCustom ? check.nextElementSibling : document.createElement("span");

	if (
		isCustom &&
		(checkLabel.tagName.toLowerCase() != "span" || checkLabel.dataset.checkCustom == undefined)
	) {
		console.error("Castle field of the radio video should be Span and have an attribute data-check-custom");
		return;
	}

	checkContainer.classList.add("check");
	checkContainer.classList.add(isCustom ? "check_custom" : "check_default");

	if (check.className) {
		checkContainer.classList.add(check.className.split(" ")[0]);
		check.className = check.className.split(" ")[0] + "__input";
	}

	if (!isCustom) {
		checkLabel.innerHTML = check.dataset.label;
		checkLabel.className = "check__mark";
	}
	if (check.checked) checkContainer.classList.add("_checked");

	checkContainer.append(checkLabel);

	check.after(checkContainer);
	checkContainer.prepend(check);

	check.addEventListener("change", () => {
		check.checked
			? check.parentElement.classList.add("_checked")
			: check.parentElement.classList.remove("_checked");
	});
});

//===============================================================
document.querySelectorAll("input[data-file]").forEach((input) => {
	if (input.type != "file") {
		console.error("The element should be input[type='file']");
		return;
	}

	const inputContainer = document.createElement("label");
	const inputLabel = document.createElement("span");
	const inputButton = document.createElement("span");

	inputContainer.className = "input-file";
	inputLabel.className = "input-file__text";
	inputButton.className = "input-file__btn _icon-plus";

	inputLabel.innerText = local("Choose File");

	inputContainer.append(inputLabel);
	inputContainer.append(inputButton);

	input.after(inputContainer);
	inputLabel.after(input);

	input.addEventListener("change", () => {
		let files = [];
		Object.values(input.files).forEach((file) => files.push(file.name));
		const filesStr = files.join(", ");
		inputLabel.innerHTML = files.length ? filesStr : "";
		inputLabel.title = filesStr;
	});
});

//===============================================================
document.querySelectorAll("input[data-mask]").forEach((input) => {
	const letterSpacing = input.dataset.maskBetween ? input.dataset.maskBetween : false;

	if (letterSpacing) input.style.setProperty("--mask-letter-spacing", `${letterSpacing}px`);

	new Inputmask({
		mask: input.dataset.mask,
		placeholder: input.dataset.maskPlaceholder ? input.dataset.maskPlaceholder : " ",
		clearIncomplete: true,
		clearMaskOnLostFocus: true,
	}).mask(input);

	input.addEventListener("mouseenter", () => input.classList.add("_mask"));
	input.addEventListener("mouseleave", () =>
		input.value || input === document.activeElement ? false : input.classList.remove("_mask")
	);
	input.addEventListener("focus", () => input.classList.add("_mask"));
	input.addEventListener("blur", () => (input.value ? false : input.classList.remove("_mask")));
});

//===============================================================
document.querySelectorAll("form[data-form]").forEach((form) => {
	initCountryPhones(form);
	validateForm(form);
});

//===============================================================
function initCountryPhones(form) {
	const countryPhoneInput = form.querySelector("input[data-phone]");

	if (!countryPhoneInput) return;

	form.iti = window.intlTelInput(countryPhoneInput, {
		strictMode: true,
		separateDialCode: true,
		initialCountry: window.userCountry,
		utilsScript: "/public/js/intlTelInput-utils.min.js",
	});
}

//===============================================================
function validateForm(form) {
	const validator = new JustValidate(form, {
		focusInvalidField: false,
		errorFieldCssClass: "_error",
		successFieldCssClass: "_success",
		errorLabelCssClass: "form__error-label",
	});

	const addFieldValidation = (field) => {
		const rules = getFieldRules(field, form);
		const config = getFieldConfig(field);

		if (form.dataset.validation === undefined) return;

		if (rules.length) {
			field.setAttribute("data-validating", "");
			validator.addField(field, rules, config);
		}
	};

	const addGroupValidation = (group) => {
		if (group.closest(".choices")) return;

		const config = getFieldConfig(group);

		if (form.dataset.validation === undefined) return;
		validator.addRequiredGroup(group, "You should select at least one communication channel", config);
	};

	const initValidation = (elements) => {
		const { fields, groups } = elements;

		[...fields, ...groups].forEach((elem) =>
			elem.closest("[data-switch], [data-switch-rev]")?.removeAttribute("data-disable")
		);

		fields.forEach((field) => {
			field.disabled = false;
			addFieldValidation(field);
		});

		groups.forEach((group) => addGroupValidation(group));
	};

	const allFields = form.querySelectorAll("input, select, textarea");
	const allGroups = form.querySelectorAll("[data-group]");
	const allElements = { fields: allFields, groups: allGroups };

	initValidation(allElements);

	validator.onValidate((validationData) => {
		if (!validationData.isSubmitted) return;

		const processFieldValidClass = (elem, isValid) => {
			if (isValid) {
				elem.classList.add(validator.globalConfig.successFieldCssClass);
				elem.classList.remove(validator.globalConfig.errorFieldCssClass);
			} else {
				elem.classList.add(validator.globalConfig.errorFieldCssClass);
				elem.classList.remove(validator.globalConfig.successFieldCssClass);
			}
		};

		Object.values(validationData.fields).forEach((field) => {
			const elem = field.elem;
			const parent = elem.parentElement;

			const isChoics = elem.closest(".choices") ? true : false;
			const isCustomFile = elem.closest(".input-file") ? true : false;
			const isCustomCheck =
				parent.tagName.toLowerCase() == "label" && (elem.type == "checkbox" || elem.type == "radio")
					? true
					: false;

			if (isCustomFile || isChoics || isCustomCheck) {
				processFieldValidClass(parent, field.isValid);
			}
		});

		Object.values(validationData.groups).forEach((group) => {
			group.elems.forEach((elem) => {
				const parent = elem.parentElement;

				const isCustomCheck =
					parent.tagName.toLowerCase() == "label" && (elem.type == "checkbox" || elem.type == "radio")
						? true
						: false;

				if (isCustomCheck) {
					processFieldValidClass(parent, group.isValid);
				}
			});
		});
	});

	validator.onSuccess(() => doSubmitForm(form));

	validator.onFail((fields) => {
		validateCountryPhone(form);
		const errorField = Object.values(fields).find((field) => !field.isValid).elem.parentElement;
		scrollTo(errorField, 0, true);
	});
}

//===============================================================
function validateCountryPhone(form) {
	const countryPhoneInput = form.querySelector("input[data-phone]");

	if (!countryPhoneInput) return true;

	const errorBlock = countryPhoneInput.parentElement.lastChild;

	const isValid = form.iti.isValidNumber();

	if (isValid) {
		countryPhoneInput.classList.remove("_error");
		countryPhoneInput.classList.add("_success");
		// errorBlock.innerHTML = "";
	} else {
		countryPhoneInput.classList.add("_error");
		countryPhoneInput.classList.remove("_success");
		// errorBlock.innerHTML = `<div class="form__error-label just-validate-error-label" style="color: rgb(184, 17, 17);">${local(
		// 	"Wrong format"
		// )}</div>`;
	}

	return isValid;
}

//===============================================================
function getFieldRules(input, form) {
	let rules = [];

	const type = input.type ? input.type : false;
	const required = input.required ? true : false;
	const repeater = input.dataset.repeater !== undefined ? true : false;
	const min = input.dataset.min ? input.dataset.min : false;
	const max = input.dataset.max ? input.dataset.max : false;
	const regexp = input.dataset.regexp ? input.dataset.regexp : false;

	if (required) {
		rules.push({
			rule: "required",
			// errorMessage: local("field_is_required"),
			errorMessage: "field_is_required",
		});
	}

	if (type == "email") {
		rules.push({
			rule: "email",
			// errorMessage: local("field_is_invalid"),
			errorMessage: "field_is_invalid",
		});
	}

	if (regexp) {
		rules.push({
			rule: "customRegexp",
			value: new RegExp(regexp, "gi"),
			errorMessage: `field_is_invalid`,
		});
	}

	// if (type == 'password') {
	// 	rules.push({
	// 		rule: 'password',
	// 		errorMessage: `Password must contain minimum eight characters, at least one letter and one number`,
	// 	});
	// }

	return rules;
}

//===============================================================
function getFieldConfig(elem) {
	const config = {};

	const type = elem.dataset.group !== undefined ? "group" : elem.type;

	if (type == "hidden") return;

	const createErrorContainer = (type) => {
		const newErrorsContainer = document.createElement("div");

		if (elem.dataset.hideError !== undefined) newErrorsContainer.style.display = "none";

		newErrorsContainer.className = `form__validate-error form__validate-error_${type}`;

		return newErrorsContainer;
	};

	const onlyOneErrorContainer = (container) => {
		const containerSelector = "." + container.className.split(/ /g).join(".");

		let containers = Array.from(container.parentElement.querySelectorAll(containerSelector));

		if (containers.length > 1) {
			container = containers.pop();
			containers.forEach((el) => el.remove());
		}

		return container;
	};

	let errorsContainer;

	switch (type) {
		case "group":
			errorsContainer = createErrorContainer("group");
			elem.after(errorsContainer);
			config.errorsContainer = onlyOneErrorContainer(errorsContainer);
			break;

		case "checkbox":
			if (elem.closest("[data-group]")) break;
			errorsContainer = createErrorContainer("check");
			const checkboxParent = elem.parentElement;
			checkboxParent.tagName.toLowerCase() == "label"
				? checkboxParent.after(errorsContainer)
				: elem.after(errorsContainer);
			config.errorsContainer = onlyOneErrorContainer(errorsContainer);
			break;

		case "file":
			errorsContainer = createErrorContainer("file");
			const fileParent = elem.parentElement;
			fileParent.tagName.toLowerCase() == "label"
				? fileParent.after(errorsContainer)
				: elem.after(errorsContainer);
			config.errorsContainer = onlyOneErrorContainer(errorsContainer);
			break;

		case "select-one":
		case "select-multiple":
			const choice = elem.closest(".choices");
			errorsContainer = createErrorContainer("select");
			choice ? choice.after(errorsContainer) : elem.after(errorsContainer);
			config.errorsContainer = onlyOneErrorContainer(errorsContainer);
			break;

		case "radio":
			break;

		default:
			errorsContainer = createErrorContainer("input");
			const inputParent = elem.parentElement;
			inputParent.tagName.toLowerCase() == "label"
				? inputParent.after(errorsContainer)
				: elem.after(errorsContainer);
			config.errorsContainer = onlyOneErrorContainer(errorsContainer);
			break;
	}

	return config;
}

//===============================================================
function doSubmitForm(form) {
	const sendForm = form.dataset.send;
	const beforeSubmit = form.dataset.before;
	const afterSubmit = form.dataset.after;

	if (!validateCountryPhone(form)) return;

	if (beforeSubmit && !window[beforeSubmit].call(form)) return;

	switch (sendForm) {
		case "ajax":
			submitByAjax(form, afterSubmit);
			break;

		case "test":
			if (afterSubmit) window[afterSubmit].call(form);
			break;

		default:
			HTMLFormElement.prototype.submit.call(form);
			break;
	}
}

//===============================================================
function submitByAjax(form, afterSubmit = false) {
	const formAction = form.action ? form.getAttribute("action").trim() : "#";
	const formMethod = form.method ? form.getAttribute("method").trim() : "GET";

	formLoading(form);

	const formData = new FormData(form);

	if (form.iti) formData.set("phone", formData.get("phone").replace(/^0+/, ""));
	if (form.iti) formData.append("full_phone", form.iti.getNumber());
	if (form.iti) formData.append("country_code", "+" + form.iti.getSelectedCountryData().dialCode);
	formData.append("ajax", true);

	fetch(formAction, {
		method: formMethod,
		body: formData,
	})
		.then((response) => response.json())
		.then((payload) => {
			if (afterSubmit) window[afterSubmit].call(form, payload);
		})
		.catch((error) => console.log(error.message))
		.finally(() => {
			formUnloading(form);
		});
}

//===============================================================
function formLoading(form) {
	form.classList.add("_sending");
}

function formUnloading(form) {
	form.classList.remove("_sending");
}

//===============================================================
function clearForm(form) {
	form
		.querySelectorAll(
			'input[type="text"], input[type="email"], input[type="tel"], input[type="password"], textarea'
		)
		.forEach((item) => {
			item.classList.remove("_success");
			item.classList.remove("_error");
			item.value = "";
		});
}

//===============================================================
function cleanPhoneNumber(phone) {
	return phone.replace(/[^\d+]/g, "");
}
