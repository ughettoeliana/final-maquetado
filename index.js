const navToggle = document.querySelector('.nav-toggle');
const navMenuInvisible = document.querySelector('.nav-menu-invisible');

navToggle.addEventListener('click', () => {
  navMenuInvisible.classList.toggle('nav-menu-visible');
  
  if(navMenuInvisible.classList.contains('nav-menu-visible')){
    navToggle.setAttribute('aria-label', 'Cerrar menú');
  } else{
    navToggle.setAttribute('aria-label', 'Abrir menú');
  }
}
)

