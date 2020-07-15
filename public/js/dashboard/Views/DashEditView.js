export default class DashDataView {
    constructor() {
        this._templateCamp = `
                <div class="col-3">
                    <label for="">Input:</label>
                    <input 
                        name="item[{amount}][nomeInput]"
                        type="text" 
                        class="form-control" 
                        placeholder="Nome do input"
                    >
                </div>

                <div class="col-3">
                    <label for="">Placeholder:</label>
                    <input 
                        name="item[{amount}][placeholderInput]"
                        type="text" 
                        class="form-control" 
                        placeholder="Descritivo do campo"
                    >
                </div>
                
                <div class="col-2">
                    <label for="">Tipo:</label>
                    <select 
                        name="item[{amount}][tipoInput]"
                        class="form-control"
                    >
                        <option value="0">Texto</option>
                        <option value="1">Simples</option>
                    </select>
                </div>

                <div class="col-2">
                    <label for="">Obrigatório:</label>
                    <select 
                        name="item[{amount}][requiredInput]"
                        class="form-control"
                    >
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>
                
                <div class="col-2">
                    <label for="">Ações:</label>
                    <div class="d-flex">
                        <!-- <button class="btn btn-primary mr-1 buttonEdit-js">Editar</button> -->
                        <button class="btn btn-danger buttonDelete-js">Excluir</button>
                    </div>
                </div>
        `;
    }
    addNewItem(element, amount) {
        let ul = element.querySelector('ul');
        let li = document.createElement("li");
        li.classList.add('block-inputs');
        li.classList.add('d-flex');
        li.classList.add('justify-content-between');
        li.classList.add('mb-4');
        li.innerHTML = this._templateCamp.replace(/{amount}/g, (amount + 1).toString());
        ul.appendChild(li);
    }
    deleteItem(el) {
        el.remove();
    }
}
