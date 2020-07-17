import DashDataView from '../Views/DashEditView.js';
import ValidationEditFormService from '../Services/ValidationEditFormService.js';
export default class DashControllerEdit {
    constructor() {
        this._formEditAbaixoAssinado = document.querySelector('.formEditAbaixoAssinado-js');
        this._validEditForm = new ValidationEditFormService();
        this._dashView = new DashDataView();
    }
    addNewItem() {
        var _a;
        let liItems = (_a = this._formEditAbaixoAssinado) === null || _a === void 0 ? void 0 : _a.querySelectorAll('.form-list li');
        let count = liItems !== undefined ? liItems.length : 0;
        this._dashView.addNewItem(this._formEditAbaixoAssinado, count);
    }
    deleteItem(el) {
        this._dashView.deleteItem(el);
    }
    sendFormAbaixoAssinado() {
        var _a;
        let errors = this._validEditForm.valid(this._formEditAbaixoAssinado);
        if (!errors.length)
            (_a = this._formEditAbaixoAssinado) === null || _a === void 0 ? void 0 : _a.submit();
        this._dashView.showErrrors(errors, this._formEditAbaixoAssinado);
    }
}
