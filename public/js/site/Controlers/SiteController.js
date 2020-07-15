import ValidForm from '../Services/ValidForm.js';
import ErrorFormView from '../Views/ErrorFormView.js';
export default class SiteController {
    constructor() {
        this._validForm = new ValidForm();
        this._errorFormView = new ErrorFormView();
        this._form = document.querySelector('.form-site form');
        this._loader = this._form.querySelector('.load');
    }
    sendForm() {
        this._startLoad();
        this._errorFormView.resetError(this._form);
        setTimeout(() => {
            let valid = this._validForm.start(this._form);
            if (!valid) {
                this._showErrors();
                this._endLoad();
                return;
            }
            this._sendAjax();
        }, 1000);
    }
    _sendAjax() {
        this._form.submit();
    }
    _startLoad() {
        var _a, _b;
        if (!((_a = this._loader) === null || _a === void 0 ? void 0 : _a.classList.contains('active')))
            (_b = this._loader) === null || _b === void 0 ? void 0 : _b.classList.add('active');
    }
    _endLoad() {
        var _a, _b;
        if ((_a = this._loader) === null || _a === void 0 ? void 0 : _a.classList.contains('active'))
            (_b = this._loader) === null || _b === void 0 ? void 0 : _b.classList.remove('active');
    }
    _showErrors() {
        this._errorFormView.showError(this._form.querySelector('.errors'), '*Por favor preencha os itens obrigatórios');
    }
}
