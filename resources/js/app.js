import './bootstrap';
import '~resources/scss/app.scss';

//Per processare le immagini
import.meta.glob(["../img/**"]);

//importiamo la parte JS di bootstrap
import * as bootstrap from 'bootstrap';

const deleteBtns = document.querySelectorAll(".btnDelete");
const myModal = document.querySelector(".confermationModal")
const deleteBtn = document.querySelector(".cancella")
const cancelBtn = document.querySelector(".annulla")
const deleteForm = document.querySelectorAll(".deleteForm")
const msg = document.querySelector(".msg-delete");

for (let i = 0; i < deleteBtns.length; i++) {
    deleteBtns[i].addEventListener("click", function(){
       event.preventDefault();

        console.log("Hai cliccato il bottone");
        
        console.log(deleteForm[i]);
        myModal.classList.remove("d-none");
        
        console.log(deleteBtns[i].getAttribute("value"));

        msg.innerHTML = `Sei sicuro di voler cancellare <strong> PER SEMPRE </strong> ${deleteBtns[i].getAttribute("value")}?`

        cancelBtn.addEventListener("click", function() {
            myModal.classList.add("d-none");
        })
        
        deleteBtn.addEventListener("click", function() {
            deleteForm[i].submit();
            myModal.classList.add("d-none");
        })

    })
}