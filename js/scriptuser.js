$(function() {
    load(1);
});
function load(page){
    var query=$("#q1").val();
    var per_page=10;
    var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
    $("#loader1").fadeIn('slow');
    $.ajax({
        url:'ajaxnotes/listar.php',
        data: parametros,
         beforeSend: function(objeto){
        $("#loader1").html("Cargando resultados...");
      },
        success:function(data){
            $(".outer_div1").html(data).fadeIn('slow');
            $("#loader1").html("");
        }
    })
}
