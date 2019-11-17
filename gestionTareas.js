function tachar_enviar(elemento, posicion, usuario){
    //event.preventDefault();
    //event.stopImmediatePropagation();
    //event.stopPropagation();
    $(elemento).find("input").is(":checked")?$(elemento).addClass("tachado"):$(elemento).removeClass("tachado");
    
    $.ajax({
        type: "GET",
        url: "cambiarEstado.php",
        data: {
            usuario: usuario,
            posicion: posicion
        },
        success: function (response) {
            alert("Estado de la tarea actualizado");   
        }
    });
    
    
}
function TareaNueva(usuario, idx){
    var texto = document.getElementById("tarea_nueva").value;

    var fecha = new Date();
    var anio = fecha.getFullYear();
    var mes = fecha.getMonth()+1;
    var dia = fecha.getDate();

    $("#lista").append(
        '<li onClick="tachar_enviar(this,'+ idx+','+ usuario+')">'+
        '<label><input type="checkbox">'+
        texto+ '<label id="fecha">'+
        dia+'-'+mes+'-'+anio+'</label>'+
        '</label></li>'
    );

    document.getElementById("tarea_nueva").value='';
    agregarTareaJson(usuario, texto);
}

function agregarTareaJson(usuario, tarea){
    $.ajax({
        type: "GET",
        url: "agregarTarea.php",
        data: {
            usuario: usuario,
            tarea: tarea
        },
        success: function (response) {
            alert("Nueva tarea guardada");   
        }
    });
}