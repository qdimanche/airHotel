let overlay = document.querySelector(".menu_overlay");
let open = document.querySelector(".fa-bars");
let close = document.querySelector(".fa-times");

open.addEventListener("click", () => {
    overlay.style.transform = "translateY(0)";
});

close.addEventListener("click", () => {
    overlay.style.transform = "translateY(-110%)";
});



window.addEventListener('popstate', function (event) {
    overlay.style.transform = "translateY(-110%)";
});