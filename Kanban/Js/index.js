// Logica Clique e arraste
const coluna = document.querySelectorAll(".coluna");

document.addEventListener("dragstart", (e) => {
  e.target.classList.add("dragging");
  console.log("teste 3")
});

document.addEventListener("dragend", (e) => {
  e.target.classList.remove("dragging");

  const item = e.target.dataset.id;
  const coluna = e.target.parentElement.dataset.id;
  //window.location.href = (`./PHP/alteraStatus.php?item=${item}&coluna=${coluna}`)
  console.log( `./PHP/alteraStatus.php?item=${item}&coluna=${coluna}`)
  location.assign(`./PHP/alteraStatus.php?item=${item}&coluna=${coluna}`);


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
  const id = $( this );
  const idItem = id.val();

  Swal.fire({
    title: 'Deseja Atualizar ou Deletar',
    width: '40vw',       
    inputAttributes: {
      autocapitalize: 'off',
    },
    background: '#EEEEEE',  
    
      html:
      "<button id='excluir'> <img src='./imagem/iconeLixeira.png' id='lixeira'> Deletar</button>" +
      "<button id='atualizar'> <img src='./imagem/iconeEditar.png' id='editar'> Atualizar</button>",

    showConfirmButton: false,
    confirmButtonColor: "#fff03",
    })


    $('#excluir').click(function(){

        Swal.fire({
          title: 'Deseja Deletar a Tarefa?',
          text: "Você irá excluir a tarefa permanetemente",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sim, deletar',
          cancelButtonText: 'Cancelar',
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Deletado',
              'Tarefa deletada com sucesso',
              'success'
            )
            console.log (idItem);
            location.assign(`./PHP/excluir.php?idItem=${idItem}`);
          }
        })

      
    })

    $('#atualizar').click(function(){
      console.log (idItem);
      location.assign(`./PHP/atualizarTarefa.php?idItem=${idItem}`);
    })

})
  
    $('#adicionar').click(function(){
        Swal.fire({
          title: 'Adicone nova Tarefa',       
          inputAttributes: {
            autocapitalize: 'off',
          },
          background: '#EEEEEE',  
          
            html:
          "<form id='formAdd' action='./PHP/cadastrarTarefa.php' method='post' autocomplete = 'off'>"+
          "<input type='text' class='adicionar' name='tituloC' id='tituloC' placeholder='Titulo'> <br> <br>"+
          "<textarea class='adicionar' name='descricaoC' id='descricaoC' cols='10' rows='10'"+
          "placeholder='Descrição'></textarea> <br><br>"+
          "<input type='text' class='adicionar' name='responsavelC' id='responsavelC' placeholder='Responsável'><br>"+
          "<button value='submit' id='enviarAdd'>Adicionar</button>"+
          "</form>",
          showConfirmButton: false,
          confirmButtonColor: "#fff03",
          })
          /*.then((result) => {
            if (result.isConfirmed) {
              var form = document.getElementById('formAdd');
              form.submit()
            }
          })*/         
    });