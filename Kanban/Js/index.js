// Logica Clique e arraste
const coluna = document.querySelectorAll(".coluna");

document.addEventListener("dragstart", (e) => {
  e.target.classList.add("dragging");
  console.log("teste 3")
});

document.addEventListener("dragend", (e) => {
  e.target.classList.remove("dragging");
  //Logica para pegar valor do item arrastado
  console.log(e.srcElement.dataset.id)
  //----
});

coluna.forEach((item) => {
  item.addEventListener("dragover", (e) => {
    const dragging = document.querySelector(".dragging");
    const applyAfter = getNewPosition(item, e.clientY);

    if (applyAfter) {
      applyAfter.insertAdjacentElement("afterend", dragging);
    } else {
      item.prepend(dragging);
    }
  });
});

function getNewPosition(coluna, posY) {
  const cards = coluna.querySelectorAll(".item:not(.dragging)");
  let result;

  for (let refer_card of cards) {
    const box = refer_card.getBoundingClientRect();
    const boxCenterY = box.y + box.height / 2;

    if (posY >= boxCenterY) result = refer_card;
  }

  return result;
}
//---

$('.opition').click(function(){
    alert ("Editar ou excluir");
})

$('#adicionar').click(function(){
    Swal.fire({
        title: 'Adicone nova Tarefa',       
        inputAttributes: {
          autocapitalize: 'off',
        },
        background: '#EEEEEE',

        html:
          "<form id='formAdd' action='cadastrarTarefa.php' method='post'>"+
          "<input type='text' class='adicionar' name='tituloC' id='tituloC' placeholder='Titulo'> <br> <br>"+
          "<textarea class='adicionar' name='descricaoC' id='descricaoC' cols='10' rows='10'"+
          "placeholder='Descrição'></textarea> <br><br>"+
          "<input type='text' class='adicionar' name='responsavelC' id='responsavelC' placeholder='Responsável'><br>"+
          "<button value='submit' id='enviarAdd'>Adicionar</button>"+
          "</form>",
        
        showCancelButton: false,
        showConfirmButton: false,
        /*confirmButtonText: 'Adicionar', */
        /*cancelButtonText: 'Cancelar', */
      })
      })
    

$('#sair').click(function(){
    alert ("Logout");
})
