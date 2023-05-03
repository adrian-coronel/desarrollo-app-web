const inputUser = document.querySelector('#user');
const inputAddress = document.querySelector('#address');
const inputEmail = document.querySelector('#email');
const inputEdad = document.querySelector('#edad');
const aLimpiar = document.querySelector('#clear')

aLimpiar.addEventListener('click',cleanForm)

function validate(){
  if(inputEdad.value < 18){
    alert("Solo se admiten usuario mayores de edad")
    return false;
  }
  return true;
}

function cleanForm(){
  inputUser.value = null;
  inputAddress.value = null;
  inputEmail.value = null;
  inputEdad.value = null;
}