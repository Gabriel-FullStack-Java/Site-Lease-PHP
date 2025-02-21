const celularCheckbox = document.getElementById("celular");
const emailCheckbox = document.getElementById("email");

celularCheckbox.addEventListener("change", function () {
  if (celularCheckbox.checked) {
    document.querySelector("#cellAdd").style.display = "block";
  } else {
    // Esconde o campo #cellAdd e limpa o valor
    document.querySelector("#cellAdd").style.display = "none";
    document.querySelector("#cellAdd").value = "";
  }
});

$("#opcao").change(function () {
  var valor = $(this).val();
  alert("O valor selecionado é: " + valor);
})


