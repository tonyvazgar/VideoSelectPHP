$(document).on('change','#colorWay',function () {
    recargarListaPrecio();
});
function recargarListaPrecio(){
    $.ajax({
        type:"POST",
        url:"../Controller/getPrice.php",
        data:"id_sneaker=" + $('#colorWay').val(),
        success:function(r){
            $('#priceColoWayLista').html(r);
        }
    });
}