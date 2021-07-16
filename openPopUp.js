function onRowClick(row) {
    $.ajax({ success: function(result){
            $(".popUp").html(
            "<ul class='popUplist'>"+
            "<li class='popUpitem' >ID: " + row.idOrder + "</li>"+
            "<li class='popUpitem'>Fecha: " + row.dateStamp + "</li>"+
            "<li class='popUpitem'>Nombre: " + row.fullName + "</li>"+
            "<li class='popUpitem'>Dirección: " + row.fullAddress + "</li>"+
            "<li class='popUpitem'>País: " + row.country + "</li>"+
            "<li class='popUpitem'>Productos: " + row.products + "</li>"+
            "<li class='popUpitem'>Estado: " + row.orderState + "</li>"+
            "</ul>"+
            "<form id='state-form' method='POST'><select name='update_state'><option value=''>Modificar Estado</option>"+
            "<option value='1'>Pago pendiente</option>"+
            "<option value='2'>Pago aceptado</option>"+
            "<option value='3'>Preparación en proceso</option>"+
            "<option value='4'>Enviado</option>"+
            "<option value='5'>Entregado</option>"+
            "<option value='6'>Cancelado</option>"+
            "<option value='7'>Reembolso</option>"+
            "<option value='8'>Error en el pago</option></select>"+
            "<input type='hidden' name='id' id='updateId' value=" + row.idOrder + "></input>"+
            "<button type='submit'>OK</button></form>");

        $(".popUp").css("visibility", "visible");
    }});
}