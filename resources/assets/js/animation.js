anime({
    targets: ".row .atom_lottie",
    scale: 2,
    easing: "easeInOutExpo",
    direction: "reverse",
    update: function () {
        document.querySelector(".title_fisika").style.display = "block";
    },
});
