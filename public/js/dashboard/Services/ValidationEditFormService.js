import { hasDuplicates } from "../Helpers/General.js";
export default class ValidationEditFormService {
    constructor() {
        this._errors = [];
    }
    valid(el) {
        this._inputs = el.querySelectorAll('.input-name');
        this._resetErrors();
        if (this._verifyForbidenNames())
            this._errors.push('Os nomes de inputs "nome", "e-mail", "e_mail", "whatsapp" são proibidos');
        if (this._verifyRepeatInputNames())
            this._errors.push('O nome dos inputs não podem ser repetidos');
        if (this._verifyEmptyField())
            this._errors.push('Nenhum campo "Input" pode ir vázio');
        return this._errors;
    }
    _verifyForbidenNames() {
        let valid = false;
        this._inputs.forEach(el => {
            if (el.value == 'nome' ||
                el.value == 'e-mail' ||
                el.value == 'e_mail' ||
                el.value == 'whatsapp') {
                valid = true;
            }
        });
        return valid;
    }
    _resetErrors() {
        this._errors.length = 0;
    }
    _verifyRepeatInputNames() {
        let arr = [];
        this._inputs.forEach(el => arr.push(el.value));
        return hasDuplicates(arr);
    }
    _verifyEmptyField() {
        let valid = false;
        this._inputs.forEach(el => {
            if (el.value.length <= 0)
                valid = true;
        });
        return valid;
    }
}
