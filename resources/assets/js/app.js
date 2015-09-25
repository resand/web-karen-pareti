/**
 * Created by resand on 22/09/15.
 */


$(function() {

    mensaje_ok();
});

function Order(model) {

    $("#input-model").val(model);

    $("#modalOrder").modal('show');
}

function ChangeImage(urlImage) {

    $('#img-preview').fadeOut('fast');
    $('#img-preview').fadeIn('fast');
    $("#img-preview").attr("src", urlImage);
}

function mensaje_ok()
{
    //var mensaje = $('input[name$="sesion"]').val();

    //if (mensaje != 1)
    //{
        //$('#modalHome').modal("show");
    //}

}