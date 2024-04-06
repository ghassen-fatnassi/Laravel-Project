const get = element => document.getElementById(element);

let open = get("menu-btn");
let nav = get("nav");
let close = get("close-btn");

open.addEventListener('click', () => {
    nav.classList.add('open-nav');
})

close.addEventListener('click', () => {
    nav.classList.remove('open-nav');
})