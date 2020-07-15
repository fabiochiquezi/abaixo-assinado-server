export default class ValidForm {
    constructor() {
        this._errorInputClass = 'input-error';
    }
    start(el) {
        const inputs = el.querySelectorAll('input.required');
        const emptyInputs = this._verifyEmptyInput(inputs);
        return emptyInputs;
    }
    _verifyEmptyInput(inputs) {
        let ok = true;
        inputs.forEach(el => {
            if (el.value.length <= 0) {
                ok = false;
                el.classList.add(this._errorInputClass);
            }
        });
        return ok;
    }
}
