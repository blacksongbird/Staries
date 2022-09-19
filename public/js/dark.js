$(".inner-switch").on("click", function() {
    if ($("body").hasClass("dark")) {
        $("body").removeClass("dark");
        $(".inner-switch").text("OFF");
        $("#player-content-dark").attr("id", "player-content");
    } else {
        $("body").addClass("dark");
        $(".inner-switch").text("ON");
        $("#player-content").attr("id", "player-content-dark");
    }
});