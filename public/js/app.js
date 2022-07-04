window.addEventListener('load', () => {
  document.body.classList.remove("clean__transition");
})

const nav = document.querySelector('.navbar');
// console.log(nav);

let lastScrollTop = 0;

window.addEventListener('scroll',()=>{
// console.log(window.scrollY);

let scrollTop = window.scrollY;
if (scrollTop > lastScrollTop){
    nav.classList.add('hidden_nav');
} else {
    nav.classList.remove('hidden_nav');
}
lastScrollTop = scrollTop;
})
