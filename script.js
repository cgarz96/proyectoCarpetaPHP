$("a").css('display','none');
var bandera=0;
$( "form" ).submit(function( event ) {
    event.preventDefault();
    var form = $(this);
  $.ajax({
    url: form.attr("action"),
    data: form.serialize(),
    type: form.attr("method"),
    success: function (data) {
    
    $("a").css('display','');
    if (data==1) {
        bandera=data;
        $("#rutaCarpeta").text("Esta carpeta ya existe, por favor elija otro nombre");
    }else{
        bandera=0;
        $("#rutaCarpeta").text(data);
    }
    },
    error:function(data) {
        console.log("No se ha podido obtener la información");
    }
  });
});

function mostrarCarpeta() {
    var rutaCarpeta = $("#rutaCarpeta").text();
    if (bandera==1) {
        console.log("Acción no permitida");
    }else{
    $.ajax({
        url:"mostrarDirectorio.php",
        data: {'nombreRuta':rutaCarpeta},
        type: "POST",
        success: function (data) {
        },
        error:function(data) {
            console.log("No se ha podido obtener la información");
        }
      });
    }
}