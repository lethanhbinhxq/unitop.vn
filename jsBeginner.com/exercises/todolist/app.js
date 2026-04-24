const LIST_TASK_DATA = "LIST_TASK_DATA";
const task_list = document.getElementById("task_list");
const input_task = document.getElementById("input_task");
const submit_task = document.getElementById("submit_task");
const input_form = document.forms.input_form;

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

function createTaskItem(name, is_complete, index) {
    return `<li class="task_item" index="${index}">
                <span class="task_name ${is_complete ? 'completed' : ''}" onClick="toggleCompleted(${index})">${name}</span>
                <div class="action">
                    <button onClick="pushEditTask(this)" class="action_edit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                        </svg>
                    </button>
                    <button onClick="deleteTask(this)" class="action_delete">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </li>`;
}

function render() {
    let data = getData();
    let html = data.map((element, index) => {
        return createTaskItem(element.name, element.isCompleted, index);
    })
    task_list.innerHTML = html.join('');

    const num_completed = getNumCompleted(data);
    const numCompletedEl = document.getElementById('num_completed');

    if (num_completed > 0) {
        numCompletedEl.innerText = `Yeah, ${num_completed} task(s) completed!`;
    } else {
        numCompletedEl.innerText = "";
    }
}

function addTask(new_task) {
    const data = getData();
    data.push(new_task)
    saveData(data);
}

function pushEditTask(element) {
    const index = element.closest('.task_item').getAttribute('index');
    const data = getData();
    input_task.value = data[index].name;
    submit_task.value = 'EDIT TASK';
    input_task.setAttribute('index', index);
}

function editTask(name, index) {
    const data = getData();
    data[index].name = name;
    saveData(data);
    input_task.removeAttribute('index');
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

input_form.addEventListener('submit', (e) => {
    // localStorage.removeItem(LIST_TASK_DATA);
    const index = input_task.getAttribute('index');

    if (input_task.value.length < 2) {
        alert('Enter your task!');
        return false;
    }
    if (index) {
        editTask(input_task.value, index);
    } else {
        const input_task = document.getElementById("input_task").value;
        const new_task = {
            name: input_task,
            isCompleted: false,
        }
        addTask(new_task);
    }
    input_task.value = "";
    submit_task.value = "ADD TASK";
    e.preventDefault();
})

document.addEventListener('keyup', (e) => {
    if (e.which == 27) {
        input_task.value = "";
        submit_task.value = "ADD TASK";
        input_task.removeAttribute('index');
    }
})

render();