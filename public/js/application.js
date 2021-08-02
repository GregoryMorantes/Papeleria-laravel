function agregarCarritoFactura(params) {
    var idproducto = $('#producto').val();
    var id = document.getElementById('selector'+idproducto).getAttribute('data-value');
    var nombre = document.getElementById('selector'+idproducto).getAttribute('data-text');
    var foto = document.getElementById('selector'+idproducto).getAttribute('data-img');
    var cantidad = $('#cantidadproducto').val();
    var precio = document.getElementById('selector'+idproducto).getAttribute('data-precio');
    alert(id);
    alert(nombre);
    alert(foto);
    alert(cantidad);
    alert(precio);
    $("#cardPrincipal").append("<div class='card'><div class='image'><img src="+'"'+"{{ asset('storage/'.$producto->foto)}}"+'"'+"></div><div class='extra'>Cantidad:20 Precio:500000</div></div>");
    
}