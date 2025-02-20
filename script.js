 // Seleciona os checkboxes
const celularCheckbox = document.getElementById('celular');
const emailCheckbox = document.getElementById('email');

 // Ação para o checkbox "Celular"
celularCheckbox.addEventListener('change', function() {
     if (celularCheckbox.checked) {
        document.querySelector("#celularCheck").style.display = "block";
         // Coloque aqui a ação que você deseja para o celular
     } else {
        document.querySelector("#celularCheck").style.display = "none";
         // Coloque aqui a ação que você deseja quando desmarcar o celular
     }
});

 // Ação para o checkbox "E-mail"
emailCheckbox.addEventListener('change', function() {
    if (emailCheckbox.checked) {
        document.querySelector("#emailCheck").style.display = "block";
        
     } else {
        document.querySelector("#emailCheck").style.display = "none";
     }
});