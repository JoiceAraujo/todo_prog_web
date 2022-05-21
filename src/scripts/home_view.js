let checkboxValue1 = false;
let progressBarPercentage = 0;
let numAll = 3;
let numChecked = 1;

const editTaskHtml = 
`
<div id="updatedTask" class="input-group">
  <input type="text" class="form-control" placeholder="Qual sua tarefa?" aria-label="Qual sua tarefa?" aria-describedby="basic-addon1">
  <button class="btn" onclick="${confirmUpdateTask()}">
    <ion-icon name="checkmark-outline"></ion-icon>
  </button>
</div>`;

const taskHTML = `
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
      <button class="btn" onclick="updateTaskDescriptionHTML(${num})">
        <ion-icon name="pencil-sharp"></ion-icon>
      </button>
      <button class="btn">
        <ion-icon name="close-circle" onclick="deleteTask(${num})"></ion-icon>
      </button>
    </div>
  </div>
`;

function newTask() {
  // TODO: Não funciona
  num = numAll++;

  return ;
}


function updateCheckboxValue() {
  this.checkboxValue1 = !checkboxValue1;
  // TODO: Não funciona
  updateProgressBar();
}

function updateProgressBar() {
  // TODO: Não funciona
  // var numAll = ('input[type="checkbox"]').length;
  // var numChecked = ('input[type="checkbox"]:checked').length;

  if(numAll > 0) {
    progressBarPercentage = (numChecked/numAll)*100;
    document.getElementById("progressBar").ariaValueNow(progressBarPercentage);
  }
}

function updateTaskDescriptionHTML(index) {
  let element = document.getElementById(`task${index}Description`);
  element.innerHTML = editTaskHtml;
}

function confirmUpdateTask() {
  
}

function deleteTask(index) {
  let element = document.getElementById(`task${index}`);
  element.innerHTML = '';
  numAll--;
  console.log(numAll);
}

function addTask() {
  let taskHTML = document.createElement('input');
  
  let parent = document.getElementById('tasks');
  parent.appendChild(taskHTML);
}