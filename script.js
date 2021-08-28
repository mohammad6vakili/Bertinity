//---------------------------------------------------------Hamburger Menu------------------------------------
const hamMenu=document.getElementById('hamburger-menu');
document.getElementById('hamburger-button').onclick=()=>{
    hamMenu.classList.add('hamburger-open');
    hamMenu.style.display='flex';
};
document.getElementById('close-ham').onclick=()=>{
    hamMenu.style.display='none';
    hamMenu.classList.remove('hamburger-open');
}