var checkboxValue1 = false;
var progressBarPercentage = 0;
var numAll = 3;
var numChecked = 1;

const editTaskHtml = 
`<div id="updatedTask" class="input-group">
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
  // var numAll = ('input[type="checkbox"]').length;
  // var numChecked = ('input[type="checkbox"]:checked').length;

  if(numAll > 0) {
    progressBarPercentage = (numChecked/numAll)*100;
    document.getElementById("progressBar").ariaValueNow(progressBarPercentage);
  }
}

function updateTaskDescription(index) {
  var element = document.getElementById(`task${index}Description`);
  element.innerHTML = editTaskHtml;
}

function deleteTask(index) {
  var element = document.getElementById(`task${index}`);
  element.innerHTML = '';
  numAll--;
  console.log(numAll);
}

function addTask() {
  var taskHTML = document.createElement('input');
  
  var parent = document.getElementById('tasks');
  parent.appendChild(taskHTML);
}