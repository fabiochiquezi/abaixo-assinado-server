const emptyInputHelper = (inputs) => {
    let ok = true;
    inputs.forEach(el => {
        if (el.value.length <= 0)
            ok = false;
    });
    return ok;
};
export { emptyInputHelper };
