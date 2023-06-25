var tl = anime.timeline({
    easing: "easeInOutExpo",
    duration: 750,
});

// Add children
tl.add({
    targets: ".row .atom_lottie",
    translateX: -385,
    delay: 500,
})
    .add({
        targets: ".row .atom_lottie",
        translateX: 0,
        duration: 1,
    })
    .add({
        targets: ".row .title_fisika",
        update: function () {
            document.querySelector(".title_fisika").style.display = "block";
        },
    });
