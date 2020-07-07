export default class DashDataView {
    constructor() {
        this._templateCamp = `
            <li class="block-inputs d-flex justify-content-between mb-4">
                <div class="col-3">
                    <label for="">Input:</label>
                    <input 
                        name="item[{amount}][nomeInput]"
                        type="text" 
                        class="form-control" 
                        placeholder="Digite o nome do campo"
                    >
                </div>

                <div class="col-3">
                    <label for="">Tipo:</label>
                    <select 
                        name="item[{amount}][tipoInput]"
                        class="form-control"
                    >
                        <option value="0">Texto</option>
                        <option value="1">Texto Simples</option>
                        <option value="2">Número</option>
                        <option value="3">Email</option>
                    </select>
                </div>

                <div class="col-3">
                    <label for="">Placeholder:</label>
                    <input 
                        name="item[{amount}][placeholderInput]"
                        type="text" 
                        class="form-control" 
                        placeholder="Digite o descritivo do campo"
                    >
                </div>

                <div class="col-3">
                    <label for="">Ações:</label>
                    <div class="d-flex">
                        <!-- <button class="btn btn-primary mr-1 buttonEdit-js">Editar</button> -->
                        <button class="btn btn-danger buttonDelete-js">Excluir</button>
                    </div>
                </div>
            </li>
        `;
    }
    addNewItem(element, amount) {
        console.log(element);
        let ul = element.querySelector('ul');
        let string = ul.innerHTML;
        string += this._templateCamp.replace(/{amount}/g, (amount + 1).toString());
        ul.innerHTML = string;
    }
    deleteItem(el) {
        el.remove();
    }
}
