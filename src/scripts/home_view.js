let checkboxValue1 = false;
let progressBarPercentage = 0;
let numAll = 0;
let numChecked = 1;

const editTaskHtml = `<div id="updatedTask" class="input-group">
  <input type="text" class="form-control" placeholder="Qual sua tarefa?" aria-label="Qual sua tarefa?" aria-describedby="basic-addon1">
</div>`;

function newTask() {
  // TODO: Não funciona
  num = numAll++;

  return `
  <div id="task${num}">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label id="task${num}Description" class="form-check-label" for="flexCheckDefault">
          Teste teste o teste a teste e teste, teste mais teste
        </label>
    </div>
    <div id="todoIcons">
      <span class="badge rounded-pill text-bg-primary">Fácil</span>
      01/04/2022
      <button class="btn" onclick="updateTaskDescription(${num})">
        <ion-icon name="pencil-sharp"></ion-icon>
      </button>
      <button class="btn">
        <ion-icon name="close-circle" onclick="deleteTask(${num})"></ion-icon>
      </button>
    </div>
  </div>`;
}

function changeCheckboxValue() {
  this.checkboxValue1 = !checkboxValue1;
  // TODO: Não funciona
  updateProgressBar();
}

function updateProgressBar() {
  // TODO: Não funciona
  // let numAll = ('input[type="checkbox"]').length;
  // let numChecked = ('input[type="checkbox"]:checked').length;

  if (numAll > 0) {
    progressBarPercentage = (numChecked / numAll) * 100;
    document.getElementById("progressBar").ariaValueNow(progressBarPercentage);
  }
}

function updateTaskDescription(index) {
  let element = document.getElementById(`task${index}Description`);
  element.innerHTML = editTaskHtml;
}

function deleteTask(index) {
  let element = document.getElementById(`task${index}`);
  element.innerHTML = "";
  numAll--;
  console.log(numAll);
}

function addTask() {
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
}