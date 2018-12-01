$("#buscarS").click(function(){
$.post("php/BuscarServicio.php",
    {selecc_delegacion: $("#seleccionarDelegacion").val(), tipo_Servicio: $("#tipo_Servicio").val()},
    function(data) {
    
        $("#contenedorR").html(data);
    }
)
});
