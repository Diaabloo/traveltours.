let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 2;

loadMoreBtn.onclick = () => {
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (var i = currentItem; i < currentItem + 2; i++) {
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 2;
    if (currentItem >= boxes.length) {
        loadMoreBtn.style.display = 'none';
    }
}

var typed = new Typed(".va-su", {
    strings: ["Valide Avec Succes"],
    typeSpeed: 800,
    backSpeed: 100,
    loop: false
})







