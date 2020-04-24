var inicio = function() {
    $(document).on("keypress", ".cantidad", function(e) {
        if (e.which == 13) {
            var inputVal = $(this).val();
            alert("entered: " + inputVal);
            var id = $(this).attr('data-id');
            var precio = $(this).attr('data-precio');
            var cantidad = $(this).val();
            $(this).parentsUntil('.producto').find('.subtotal').text('Subtotal: ' + (precio * cantidad));
            $.post('modificarDatos.php', {
                Id: id,
                Precio: precio,
                Cantidas: cantidad
            }, function(e) {
                $("#total").text('Total: ' + e)
            });

        }
    });
    $(".eliminar").click(function(e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        $(this).parentsUntil('.producto').remove();
        $.post("eliminar.php", {
            Id: id
        }, function(a) {
            // if (a == '0') {
            Location.href = "carrito.php";
            // }
        });
    });
}
$(document).ready(inicio);