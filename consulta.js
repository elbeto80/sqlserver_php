function cosultar_sql() {
    var parametros = {
        "opcion": "consultar_autores"
    };

    $.ajax({
        data: parametros,
        url: 'consulta_admin.php',
        type: 'get',
        dataType: "json",
        beforesend: function(){
        },
        success:  function (data){
            console.log(data);
            $("#informacion").html('<pre>'+data+'</pre>');
        },
        error: function(jqXHR,estado,error){
            console.log(error);
        }
    });				
}