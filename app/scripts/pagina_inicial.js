const editarTarefaHTML = `<div id="updatedTask" class="input-group">
  <input type="text" class="form-control" placeholder="Qual sua tarefa?" aria-label="Qual sua tarefa?" aria-describedby="basic-addon1">
  <button class="btn">
    <ion-icon name="checkmark-outline"></ion-icon>
  </button>
</div>`;

function atualizarDescricaoDaTarefaHTML(index) {
  let element = document.getElementById(`task${index}Description`);
  element.innerHTML = editarTarefaHTML;
}

function apagarTarefa(index) {
  let element = document.getElementById(`task${index}`);
  element.innerHTML = "";
}

function adicionarTarefa() {
  /**
   * Tentamos criar uma estrutura com JS puro que iria criar uma tarefa na tela, mas como ainda não temos total controle do índice,
   * outras funcionalidades como a edição e apagar a tarefa estavam sendo prejudicadas.
    
    numAll++

    let parent = document.getElementById("tasks");

    let taskHTML = document.createElement("div");
    taskHTML.setAttribute("id", `task${numAll}`);

    let element = document.createElement("div");
    element.classList.add("form-check");

    let input = document.createElement("input");
    input.classList.add("form-check-input");
    input.setAttribute("type", "checkbox")
    input.setAttribute("id", "flexCheckDefault");

    let label = document.createElement("label");
    label.classList.add("form-check-label");
    label.setAttribute("id", `task${numAll}Description`);
    label.setAttribute("for", "flexCheckDefault");
    label.innerText = "Teste teste o teste a teste e teste, teste mais teste";
    

    let divIcons = document.createElement("div");
    divIcons.setAttribute("id", "todoIcons");

    let span = document.createElement("span");
    span.classList.add("badge" ,"rounded-pill" , "text-bg-primary");
    span.innerHTML= "Fácil";

    let button = document.createElement("button");
    button.classList.add("btn");
    button.setAttribute("onclick", `updateTaskDescription(${numAll})`);
    button.innerHTML= '<ion-icon name="pencil-sharp"></ion-icon>';

    let buttonDelete = document.createElement("button");
    buttonDelete.classList.add("btn");
    buttonDelete.setAttribute("onclick", `deleteTask(${numAll})`);
    buttonDelete.innerHTML= '<ion-icon name="close-circle"></ion-icon>';

    divIcons.appendChild(span)
    divIcons.appendChild(button);
    divIcons.appendChild(buttonDelete);
    input.appendChild(label);
    element.appendChild(input);
    taskHTML.appendChild(element);
    taskHTML.appendChild(divIcons);
    parent.appendChild(taskHTML);
   */
  
  alert('Funcionalidade em desenvolvimento');
}

function editarQuadro() {
  alert('Funcionalidade em desenvolvimento');
}

function apagarQuadro() {
  alert('Funcionalidade em desenvolvimento');
}