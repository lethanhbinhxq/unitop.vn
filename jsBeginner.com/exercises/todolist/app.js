const LIST_TASK_DATA = "LIST_TASK_DATA";
const task_list = document.getElementById("task_list");
const input_task = document.getElementById("input_task");
const submit_task = document.getElementById("submit_task");

function getData() {
    let data = localStorage.getItem(LIST_TASK_DATA);
    data = data ? JSON.parse(data) : [];
    return data;
}

function saveData(data) {
    localStorage.setItem(LIST_TASK_DATA, JSON.stringify(data));
    render();
}

function getNumCompleted(data) {
    let count = 0;
    for (item of data) {
        if (item.isCompleted) count++;
    }
    return count;
}

function render() {
    let data = getData();
    let html = "";
    for (let index in data) {
        html += `
                <li class="task_item" index="${index}">
                    <span class="task_name ${data[index].isCompleted ? 'completed' : ''}" onClick="toggleCompleted(${index})">${data[index].name}</span>
                    <div class="action">
                        <button onClick="editTask(this)" class="action_edit"><i class="fa-solid fa-pencil"></i></button>
                        <button onClick="deleteTask(this)" class="action_delete"><i class="fa-solid fa-trash-can"></i></button>
                    </div>
                </li>`;
    }
    task_list.innerHTML = html;

    const num_completed = getNumCompleted(data);
    const numCompletedEl = document.getElementById('num_completed');
    console.log(num_completed);

    if (num_completed > 0) {
        numCompletedEl.innerText = `Yeah, ${num_completed} task(s) completed!`;
    } else {
        numCompletedEl.innerText = "";
    }
}

function addTask() {
    const input_task = document.getElementById("input_task").value;
    const data = getData();
    data.push({
        name: input_task,
        isCompleted: false,
    })
    saveData(data);
}

function editTask(element) {
    const index = element.closest('.task_item').getAttribute('index');
    const data = getData();
    input_task.value = data[index].name;
    submit_task.value = 'EDIT TASK';
    const task_index = document.createElement('div');
    task_index.id = 'task_index';
    task_index.setAttribute('index', index);
    task_list.appendChild(task_index);
    element.closest('.action').style.visibility = 'hidden';
}

function deleteTask(element) {
    if (confirm("Bạn có chắc chắn muốn xóa task này hay không?")) {
        const index = element.closest('.task_item').getAttribute('index');
        let data = getData();
        data.splice(index, 1);
        saveData(data);
    }
}

function toggleCompleted(index) {
    let data = getData();
    data[index].isCompleted = !data[index].isCompleted;
    saveData(data);
}

const input_form = document.forms.input_form;
input_form.addEventListener('submit', (e) => {
    // localStorage.removeItem(LIST_TASK_DATA);
    const task_index = document.getElementById('task_index');
    if (task_index) {
        const index = task_index.getAttribute('index');
        const data = getData();
        data[index].name = input_task.value;
        saveData(data);
        task_list.removeChild(task_index);
    } else {
        addTask();
    }
    input_task.value = "";
    submit_task.value = "ADD TASK";
    e.preventDefault();
})

render();