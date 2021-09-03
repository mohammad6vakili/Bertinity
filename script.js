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
    interval: 60000000
  })