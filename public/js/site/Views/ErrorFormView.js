export default class ErrorFormView {
    showError(el, text) {
        el.classList.add('active');
        el.innerHTML = `<p>${text}</p>`;
    }
    resetError(el) {
        el.querySelectorAll('input.input-error')
            .forEach(el => el.classList.remove('input-error'));
    }
}
