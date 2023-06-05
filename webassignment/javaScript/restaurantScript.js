let menu=document.querySelector('#menu-bars');
let navbar=document.querySelector('.navigatebar');

menu.onclick =() =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}

var swiper = new Swiper(".home-slider",{
  spaceBetween: 1000,
  centeredSlides: true,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  loop:true,
   
});


  
  