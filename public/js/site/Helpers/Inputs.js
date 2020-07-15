const emptyInputs = (inputs) => {
    inputs.forEach(el => {
        if (el.value.length <= 0)
            return false;
        return true;
    });
};
export { emptyInputs };
