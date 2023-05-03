// Value of params URL
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const user = urlParams.get('user');
const password = urlParams.get('password');

// elements html
const avatar = document.querySelector('#avatar');
const spanRol = document.querySelector('#spanRol');
const rol = document.querySelector('#rol');
const formLogin = document.querySelector('#formLogin');


avatar.addEventListener('click',showAndCloseRol);
spanRol.innerText = user;

function showAndCloseRol(){
  // rol.setAttribute('class','activeRol bg-light border py-2 px-2 border-0 rounded');
  if(rol.classList.contains('rol')){
    rol.classList.add('activeRol');
    rol.classList.remove('rol');
  }else{
    rol.classList.add('rol');
    rol.classList.remove('activeRol');
  }
}
