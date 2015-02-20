$(function() {

    // just a super-simple JS demo

    var demoHeaderBox;

    // simple demo to show create something via javascript on the page
    if ($('#javascript-header-demo-box').length !== 0) {
    	demoHeaderBox = $('#javascript-header-demo-box');
    	demoHeaderBox
      .hide()
      .text('Hello from JavaScript! This line has been added by public/js/application.js')
      .css('color', 'green')
      .fadeIn('slow');
  }

    // if #javascript-ajax-button exists
if ($('#btn_Add_Beneficio').length !== 0) {

    $('#btn_Add_Beneficio').on('click', function(){
        var ben_Id,ben_Nombre,ben_Descripcion;
        ben_Id = $("#txt_Ben_Id").val();
        ben_Nombre = $("#txt_Ben_Nombre").val();
        ben_Descripcion = $("#txt_Ben_Descripcion").val();


            // send an ajax-request to this URL: current-server.com/songs/ajaxGetStats
            // "url" is defined in views/_templates/footer.php
            $.ajax({
                type: "POST",
                url: url+"/beneficios/addBeneficio",
                data: { "txt_Ben_Id": ben_Id, "txt_Ben_Nombre": ben_Nombre, "txt_Ben_Descripcion":ben_Descripcion }
            })
            .done(function(result) {
                    // this will be executed if the ajax-call was successful
                    // here we get the feedback from the ajax-call (result) and show it in #javascript-ajax-result-box
                    alert(result);
                    $("#txt_Ben_Id").val();
                    $("#txt_Ben_Nombre").val();
                    $("#txt_Ben_Descripcion").val();

                })
            .fail(function() {
                    // this will be executed if the ajax-call had failed
                })
            .always(function() {
                    // this will ALWAYS be executed, regardless if the ajax-call was success or not
                });
        });
}    

    

        // if #javascript-ajax-button exists
        if ($('#btn_Add_Postulacion').length !== 0) {

            $('#btn_Add_Postulacion').on('click', function(){
                var pos_ID,pos_Tipo_Documento,pos_Nombre,pos_Apellido,pos_Correo,pos_Sexo,pos_Ficha,pos_FechaN;
                pos_ID = $("#txt_Pos_ID").val();
                pos_Tipo_Documento = $("#txt_Pos_Tipo_Documento").val();
                pos_Nombre = $("#txt_Pos_Nombre").val();
                pos_Apellido = $("#txt_Pos_Apellido").val();
                pos_Correo = $("#txt_Pos_Correo").val();
                pos_Sexo = $("#txt_Pos_Sexo").val();
                pos_Ficha = $("#txt_Pos_Ficha").val();
                pos_FechaN = $("#txt_Pos_FechaN").val();


            // send an ajax-request to this URL: current-server.com/songs/ajaxGetStats
            // "url" is defined in views/_templates/footer.php
            $.ajax({
                type: "POST",
                url: url+"/postulaciones/addPostulacion",
                data: { "txt_Pos_ID": pos_ID, "txt_Pos_Tipo_Documento": pos_Tipo_Documento, "txt_Pos_Nombre":pos_Nombre, "txt_Pos_Apellido":pos_Apellido,
                "txt_Pos_Correo":pos_Correo,"txt_Pos_Sexo":pos_Sexo, "txt_Pos_Ficha":pos_Ficha,"txt_Pos_FechaN":pos_FechaN }
            })
            .done(function(result) {
                    // this will be executed if the ajax-call was successful
                    // here we get the feedback from the ajax-call (result) and show it in #javascript-ajax-result-box
                    alert(result);
                    $("#txt_Pos_ID").val();
                    $("#txt_Pos_Tipo_Documento").val();
                    $("#txt_Pos_Nombre").val();
                    $("#txt_Pos_Apellido").val();
                    $("#txt_Pos_Correo").val();
                    $("#txt_Pos_Sexo").val();
                    $("#txt_Pos_Ficha").val();
                    $("#txt_Pos_FechaN").val();
                })
            .fail(function() {
                    // this will be executed if the ajax-call had failed
                })
            .always(function() {
                    // this will ALWAYS be executed, regardless if the ajax-call was success or not
                });
        });
}





});
