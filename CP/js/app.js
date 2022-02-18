

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".navigation-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}))

const shoppingBag = document.querySelector("#shopping-bag");
const bagContainer = document.querySelector(".bag-container");
const closeContainer = document.querySelector("#close-con");

shoppingBag.addEventListener("click", () => {
    bagContainer.classList.toggle("active");
})

document.querySelectorAll("#close-con").forEach(n => n.addEventListener("click", () => {
    shoppingBag.classList.remove("active");
    bagContainer.classList.remove("active");
}))