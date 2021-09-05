//----------------------------------------Hamburger Menu------------------------------------
const hamMenu=document.getElementById('hamburger-menu');
document.getElementById('hamburger-button').onclick=()=>{
    hamMenu.classList.add('hamburger-open');
    hamMenu.style.display='block';
};
document.getElementById('close-ham').onclick=()=>{
    hamMenu.style.display='none';
    hamMenu.classList.remove('hamburger-open');
}
//------------------------------------------carousel----------------------------------------
  $('.carousel').carousel({
      interval: 6000
    })

  const swiper = new Swiper('.swiper', {
    // Optional parameters
    effect: "fade",
    loop: true,
    speed: 1200,
    autoplay: {
      delay: 6000,
    },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
  