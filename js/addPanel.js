let btnDelete = document.getElementsByClassName('delete_btn');
let panel = document.getElementById('panel');

for (let i = 0; i < btnDelete.length; i++) {
    function ShowPanel() {
        panel.style.display = "block";
    }
    function NotShowPanel() {
        panel.style.display = "none";
    }

    let del = document.getElementById('del_btn');
    let cancel = document.getElementById('cancel_btn');

    btnDelete[i].addEventListener('click', ()=>{
        ShowPanel();
    });
    cancel.addEventListener('click', (e)=>{
        e.preventDefault()
        NotShowPanel();
    });
}


let btnError = document.getElementById('message_btn');
let messageError = document.getElementById('message_error');

btnError.addEventListener('click', ()=>{
    messageError.remove();
});

