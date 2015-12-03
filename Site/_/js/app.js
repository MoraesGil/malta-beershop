// A $( document ).ready() block.
$( ".ancorMarca" ).click(function() {

  gerar($(this).data("qtd"), $(this).data("tipo"));
  animate($(this),'tada');
});

function gerar(qtd, tipo){
  var links  = {
    cervejas :
    [
      {
        id : 1,
        pg : 'pilsen'
      },
      {
        id : 2,
        pg : 'pilsen-sem-alcool'
      },
      {
        id : 3,
        pg : 'golden-beer'
      },
      {
        id : 4,
        pg : 'malzbier'
      },
      {
        id : 5,
        pg : 'malzbier-sem-alcool'
      }
    ],
    refri :
    [
      {
        id : 1,
        pg : 'tubaina-cristalina'
      },
      {
        id : 2,
        pg : 'cristalina-zero'
      },
      {
        id : 3,
        pg : 'cristalina-uva'
      },
      {
        id : 4,
        pg : 'cristalina-laranja'
      },
      {
        id : 5,
        pg : 'cristalina-limao'
      },
      {
        id : 6,
        pg : 'cristalina-guarana'
      },
      {
        id : 7,
        pg : 'cristalina-citrus'
      },
      {
        id : 8,
        pg : 'tropicola'
      },
      {
        id : 9,
        pg : 'tropicola-zero'
      }
    ]
  };

  var retorno ="";
  for (var i = 1; i <= qtd; i++) {
    var link;

    switch(tipo) {
      case "cervejas":
      {
        link = links["cervejas"][i-1]["pg"];
        //console.log(links["cervejas"][i-1]["pg"]);
      } break;
      case "refri":
      {
        link = links["refri"][i-1]["pg"];
        //console.log(links["refri"][i-1]["pg"]);
      } break;
      case "chopps":
      {
        link = "chopp";
        //console.log(links["refri"][i-1]["pg"]);
      } break;
      default:
      {
        link = "404";
      } break;
    }
    retorno+="<div class='col-md-4 col-sm-4 marca-brasao hover-pulse animate-in' data-anim-type='zoom-in-left'>";
    retorno+="<a href='/"+link+"' class='thumbnail thumbmarca'>";
    retorno+="<img src='_/images/marcas/"+tipo+"/"+i+".png'>";
    retorno+="</a></div>";
  }

  // console.log(retorno);

  $("#contentMarcas").html(retorno);

  animate('.marca-brasao','zoom-in-left');
}
