$("a").on("click", function (e) {
    if (this.hash !== "") {
        e.preventDefault();

        var hash = this.hash;

        $("html, body").animate(
            {
                scrollTop: $(hash).offset().top,
            },
            800,
        );
    }
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $(".custom-navbar").addClass("navbar-scrolled");
    } else {
        $(".custom-navbar").removeClass("navbar-scrolled");
    }
});
