const message = document.querySelector('#message');
const inputUser = document.getElementById('user');
const inputPassword = document.getElementById('password');
const formLogin = document.getElementById('formLogin');


const accounts = [
  {"user":"VISITANTE","password":"123"},
  {"user":"COMPRADOR","password":"321"}
];

function inform(){
  message.innerText = "Contact 353-2333";
}


// function validated(){
//   let user = inputUser.value;
//   let password = inputPassword.value;

//   for(let i = 0; i < accounts.length ; i++){
//     let userIsValidate = user.toUpperCase() == accounts[i].user;
//     let passwordIsValidate = password == accounts[i].password;
//     if(userIsValidate){
//       if(passwordIsValidate){
//         return true;
//       }
//       alert('Incorrect password');
//       return false;
//     }
//     alert('Incorret User')
//     return false;
//   }
// }
function validate(){
  let user = inputUser.value;
  let password = inputPassword.value;
  
  switch(user.toUpperCase()){
    case 'VISITOR':
      if(password != '123'){
        alert('Incorrect password');
        return false;
      }
      formLogin.setAttribute('action','main.html');
      return true;
    case 'BUYER':
      if(password != '321'){
        alert('Incorrect password');
        return false;
      }
      formLogin.setAttribute('action','main2.html');
      return true;
    case 'ADMINISTRATOR':
      if(password != '111'){
        alert('Incorrect password');
        return false;
      }
      formLogin.setAttribute('action','main2.html');
      return true;
    default:
      alert('User does not have access or is not registered');
      return false;
  }

}