import SiteController from './Controlers/SiteController.js';
const buttonSendForm = document.querySelector('.form-site .btn-send-js');
const siteController = new SiteController();
buttonSendForm.addEventListener('click', (e) => {
    e.preventDefault();
    siteController.sendForm();
});
