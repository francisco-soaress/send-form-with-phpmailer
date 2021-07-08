$(function () {
    var urlLocation = "https://localhost/study/study-private/git/gitlab/send-form-with-phpmailer/";

    $(".sendForm").on("submit", function (e) {
        e.preventDefault();

        var updateData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: urlLocation + "Config/Helpers/sendEmail.php",
            data: updateData,
            dataType: "json",
            beforeSend: function () {
                $(".content-modal-sendform-general").fadeIn().css("display", "flex")
            },
            success: function (data) {
                console.clear();
                console.log();

                if (data.success) {
                    window.setTimeout(function () {
                        window.location.href = urlLocation + "sucesso"
                    }, 500);
                }

                if (data.erro) {
                    $(".content-modal-sendform-general").fadeOut().css("display", "flex");
                    window.setTimeout(function () {
                        window.location.href = urlLocation + "erro"
                    }, 500);
                }

            }
            // error: function () {               

            //     window.setTimeout(function () {
            //         $(".content-modal-sendform-general").fadeOut().css("display", "flex");
            //         alert("Eita, algo de errado não está certo");
            //     }, 1000);

            // }
        });

        return false;

    });
});