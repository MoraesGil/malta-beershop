// A $( document ).ready() block.
$( ".ancorMarca" ).click(function() {

  gerar($(this).data("qtd"), $(this).data("tipo"));
  animate($(this),'tada');
});

function gerar(qtd, tipo){
  // Marcas : [
  //   cervejas : [
  //     {
  //       id : 1
  //       pg : 'pilsen'
  //     },
  //     {
  //       id : 2
  //       pg : 'pilsen-sem-alcool'
  //     },
  //     {
  //       id : 3
  //       pg : 'golden'
  //     },
  //     {
  //       id : 4
  //       pg : 'malzbier'
  //     },
  //     {
  //       id : 5
  //       pg : 'malzbier-sem-alcool'
  //     },
  //     {
  //       id : 6
  //       pg : 'dunkel'
  //     }
  //   ],
  //   chop : 'chop'
  // ];

  var retorno ="";
  for (var i = 1; i <= qtd; i++) {

    retorno+="<div class='col-md-4 col-sm-4 marca-brasao hover-pulse animate-in' data-anim-type='zoom-in-left' data-anim-delay='"+(i*100)+"'>";
    retorno+="<a href='#' class='thumbnail thumbmarca'>";
    retorno+="<img src='_/images/marcas/"+tipo+"/"+i+".png'>";
    retorno+="</a></div>";

  }
  // alert(retorno);
  $("#contentMarcas").html(retorno);
  //console.log(retorno);

  animate('.marca-brasao','zoom-in-left');
}
