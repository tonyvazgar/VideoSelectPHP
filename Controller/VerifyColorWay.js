$(document).ready(function(){
    $('#modelos').change(function(){
        recargarLista();
    });
})
function recargarLista(){
    $.ajax({
        type:"POST",
        url:"../Controller/getColorWay.php",
        data:"id_modelo=" + $('#modelos').val(),
        success:function(r){
            $('#select2lista').html(r);
        }
    });
}