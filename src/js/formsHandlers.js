function mainFormAfterSubmit({ success, ...payload }) {
	success ? mainFormSuccessHandler(this, payload) : mainFormErrorHandler(this, payload);
}

function mainFormSuccessHandler(form, { auto_login_url }) {
	auto_login_url
		? renderSuccessRegistrationAndRedirect(form, auto_login_url)
		: renderSuccessRegistration(form);

	clearForm(form);
	submitCooldown();
}

function mainFormErrorHandler(form, { code, errors }) {
	code === "invalid_params" ? renderInvalidParamsError(form, errors) : renderRegistrationError(form);
}

function renderSuccessRegistrationAndRedirect(form, url) {
	setCookie("autologin", url, { expires: 2 * 24 * 60 * 60 });

	const message = new FormMessage(form.querySelector(".form-message"), {
		title: window.workWithLang.local("t.main.reg_complete"),
		text: window.workWithLang.local("t.main.redirect_timer"),
		link: url,
	});

	message.render();
}

function renderSuccessRegistration(form) {
	const message = new FormMessage(form.querySelector(".form-message"), {
		title: window.workWithLang.local("t.main.reg_complete"),
	});

	message.render();
}

function renderInvalidParamsError(form, errors) {
	const message = new FormMessage(form.querySelector(".form-message"), {
		error: true,
		title: window.workWithLang.local("t.main.something_wrong"),
		text: Array.isArray(errors) ? Object.keys(errors || []) : [errors],
	});

	message.render();
}

function renderRegistrationError(form) {
	const message = new FormMessage(form.querySelector(".form-message"), {
		error: true,
		title: window.workWithLang.local("t.main.something_wrong"),
		text: window.workWithLang.local("t.main.try_again"),
	});

	message.render();
}

//===============================================================

function helpFormAfterSubmit({ success }) {
	success ? renderHelpFormSuccess(this) : renderHelpFormError(this);
}

function renderHelpFormSuccess(form) {
	clearForm(form);

	const message = new FormMessage(form.querySelector(".form-message"), {
		title: window.workWithLang.local("t.main.application_accepted"),
	});

	message.render();
}

function renderHelpFormError(form) {
	const message = new FormMessage(form.querySelector(".form-message"), {
		error: true,
		title: window.workWithLang.local("t.main.something_wrong"),
		text: window.workWithLang.local("t.main.try_again"),
	});

	message.render();
}

//===============================================================

function forgotFormAfterSubmit() {
	clearForm(this);

	const message = new FormMessage(this.querySelector(".form-message"), {
		title: window.workWithLang.local("t.main.reset_password"),
	});

	message.render();
}

//===============================================================

function signinFormAfterSubmit() {
	clearForm(this);

	const message = new FormMessage(this.querySelector(".form-message"), {
		error: true,
		title: window.workWithLang.local("t.main.no_user_found"),
	});

	message.render();
}

//===============================================================
//===============================================================
//===============================================================

class FormMessage {
	static #defaulOptions = {
		error: false,
		title: "",
		text: "", // string|array
		link: "",
		redirectTimeout: 5,
	};

	constructor(messageElement, options) {
		this.messageElement = messageElement;
		this.options = options ? { ...FormMessage.#defaulOptions, ...options } : FormMessage.#defaulOptions;
	}

	render() {
		this._clear();
		this._setStatus();
		this._renderTitle();
		this._renderMessage();
		this._renderContent();
	}

	_renderTitle() {
		this.titleElement = document.createElement("h5");
		this.titleElement.innerHTML = this.options.title;
	}

	_renderMessage() {
		if (!this.options.text) return;

		const isTextArray = Array.isArray(this.options.text);

		if (isTextArray) {
			// this._renderList();
		} else if (this.options.link) {
			this._renderLink();
		} else {
			this._renderParagraph();
		}
	}

	_renderParagraph() {
		this.textElement = document.createElement("p");

		this.textElement.innerHTML = this.options.text;
	}

	_renderList() {
		this.textElement = document.createElement("ul");

		this.options.text.forEach((text) => {
			const listItem = document.createElement("li");
			listItem.innerHTML = text;
			this.textElement.append(listItem);
		});
	}

	_renderLink() {
		this.textElement = document.createElement("p");
		this.textElement.innerHTML = this.options.text.replace(
			"{{timer}}",
			`<span>${this.options.redirectTimeout}</span>`
		);

		const intervalId = setInterval(() => {
			this.textElement.innerHTML = this.options.text.replace(
				"{{timer}}",
				`<span>${--this.options.redirectTimeout}</span>`
			);

			if (!this.options.redirectTimeout > 0) {
				clearInterval(intervalId);
				window.location.href = this.options.link;
			}
		}, 1000);
	}

	_renderContent() {
		const messageContentElement = document.createElement("div");

		this.titleElement && messageContentElement.append(this.titleElement);
		this.textElement && messageContentElement.append(this.textElement);

		this.messageElement.append(messageContentElement);
	}

	_setStatus() {
		this.options.error
			? this.messageElement.classList.add("_error")
			: this.messageElement.classList.add("_success");
	}

	_clear() {
		this.messageElement.innerHTML = "";

		this.messageElement.classList.remove("_success");
		this.messageElement.classList.remove("_error");

		return this;
	}
}

function submitCooldown() {
	const buttons = document.querySelectorAll('button[type="submit"]');

	buttons.forEach((btn) => {
		btn.disabled = true;
	});

	setTimeout(() => {
		buttons.forEach((btn) => {
			btn.disabled = false;
		});
	}, 1000 * 30);
}
