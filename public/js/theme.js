$(document).ready(function(e) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    function light() {
        $.ajax({
            method: "get",
            url: "/settheme",
            data: {
                theme: "stylelight.css"
            },
            success: function(msg) {
                console.log(msg);
                location.reload();
            }
        });
    }

    function dark() {
        $.ajax({
            method: "get",
            url: "/settheme",
            data: {
                theme: "styledark.css"
            },
            success: function(msg) {
                location.reload();
                console.log(msg);
            }

        });
    }

    $("body").on("click", "#light", function() {
        light();
    });
    $("body").on("click", "#dark", function() {
        dark();
    });
});