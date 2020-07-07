import DashDataView from '../Views/DashEditView.js';
export default class DashControllerEdit {
    constructor() {
        this._formEditAbaixoAssinado = document.querySelector('.formEditAbaixoAssinado-js');
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
        (_a = this._formEditAbaixoAssinado) === null || _a === void 0 ? void 0 : _a.submit();
    }
}
