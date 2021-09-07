//----------------------------------------Hamburger Menu------------------------------------
const header=document.getElementById('header');
const hamBtn=document.getElementById("hamburger-button");
const headerLogo=document.getElementById("header-logo");
const closeHamBtn=document.getElementById("close-ham-wrapper");
const headerLinks=document.getElementById("header-links");
document.getElementById('hamburger-button').onclick=()=>{
    header.classList.add('header-ham');
    header.style.display='block';
    hamBtn.style.display="none";
    headerLogo.style.display="none";
    closeHamBtn.style.display="flex";
    headerLinks.classList.add("show-menu");
};
document.getElementById('close-ham').onclick=()=>{
    header.style.display='flex';
    header.classList.remove('header-ham');
    hamBtn.style.display="flex"
    headerLogo.style.display="block";
    closeHamBtn.style.display="none";
    headerLinks.classList.remove("show-menu");
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
  