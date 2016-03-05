$(document).ready(function () {
    "use strict";
    var Form = $('#form');
    var Button = $('#form-button');
    var Success = $('#success');
    var Error = $('#error');
    var Message = $('#error span');

    Form.submit(function (event) {

        Error.fadeOut(200);

        event.preventDefault();

        var data = Form.serializeArray();

        var subscription = subscribe(data);

        subscription.fail(handleError);
        subscription.done(handleSuccess)

    });

    function subscribe(data) {
        return $.ajax({
            method: 'POST',
            url: '/subscribe',
            data: data
        })
    }

    function handleSuccess(response) {
        console.info(response);
        Button.fadeOut(400, function () {
            Success.fadeIn(400)
        })

    }

    function handleError(error) {

        var messages = JSON.parse(error.responseText);

        Message.text(messages.email);
        Error.fadeIn(400);
    }



    $(function() {
        $("#btnSave").click(function() {
            html2canvas($("#img2share"), {
                onrendered: function(canvas) {
                    theCanvas = canvas;
                    document.body.appendChild(canvas);

                    // Convert and download as image
                    Canvas2Image.saveAsPNG(canvas);
                    $("#img-out").append(canvas);
                    // Clean up
                    //document.body.removeChild(canvas);
                }
            });
        });
    });


});