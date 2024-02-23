import anime from "animejs";

document.addEventListener("DOMContentLoaded", function() {
    startAnime();
});

function startAnime() {
    const sideMovement = document.querySelector('#sideMovement');
    sideMovement.innerHTML = sideMovement.textContent.replace(/\S/g, "<span>$&</span>");
    const vanish = document.querySelectorAll('.vanish');
    vanish.forEach((e) => {
        e.classList.remove("vanish");
    })
    const appearingMovement = document.querySelector('#appearingMovement');
    appearingMovement.innerHTML = appearingMovement.textContent.replace(/\S/g, "<span>$&</span>");

    anime.timeline({
        loop: false
    })

    .add({
        targets: '#sideMovement span',
        translateY: [-600, 0],
        scale: [10,1],
        opacity: [0,1],
        easing: "easeOutExpo",
        duration: 2000,
        delay: anime.stagger(100),
    })

    .add({
        targets: '#appearingMovement span',
        opacity: [0,1],
        easing: "easeInQuad",
        duration: 1000,
        delay: anime.stagger(100),
    })
}
