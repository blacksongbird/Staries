$(".inner-switch").on("click", function() {
    if ($("body").hasClass("dark")) {
        $("body").removeClass("dark");
        $(".inner-switch").text("OFF");
        $(".switch-text").text("Dark Mode:");
        $("#player-content-dark").attr("id", "player-content");
    } else {
        $("body").addClass("dark");
        $(".inner-switch").text("ON");
        $(".switch-text").text("Light Mode:");
        $("#player-content").attr("id", "player-content-dark");
    }
});