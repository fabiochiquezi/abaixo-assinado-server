import DashControllerEdit from '../Controller/DashControllerEdit.js';
let DashEditCtrl = new DashControllerEdit();
let buttonAddsField = document.querySelector('.buttonAddsField-js');
let buttonSendFormAbaixoAssinado = document.querySelector('.buttonSend-js');
let inputsFile = document.querySelectorAll('.custom-file-input');
buttonAddsField === null || buttonAddsField === void 0 ? void 0 : buttonAddsField.addEventListener('click', (e) => {
    e.preventDefault();
    DashEditCtrl.addNewItem();
});
document.addEventListener('click', function (e) {
    var _a, _b;
    if (e.target &&
        e.target.classList.contains('buttonDelete-js')) {
        e.preventDefault();
        let el = e.target;
        const li = (_b = (_a = el.parentElement) === null || _a === void 0 ? void 0 : _a.parentElement) === null || _b === void 0 ? void 0 : _b.parentElement;
        DashEditCtrl.deleteItem(li);
    }
});
buttonSendFormAbaixoAssinado === null || buttonSendFormAbaixoAssinado === void 0 ? void 0 : buttonSendFormAbaixoAssinado.addEventListener('click', (e) => {
    e.preventDefault();
    DashEditCtrl.sendFormAbaixoAssinado();
});
inputsFile.forEach(el => {
    el.addEventListener('change', () => {
        el.nextElementSibling.innerText = el.value;
    });
});
