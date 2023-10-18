



//Form
// Nom:
document.getElementById('nom').addEventListener('input', function(event) {
  let nom=event.target.value


  if(nom.length>50){
      let userLastName=document.getElementById('nom');
      userLastName.classList.add('invalid');
      userLastName.classList.remove('valid')
      document.querySelector('.nom').textContent="Le nom doit comporter moins de 50 caractères."
  }else{
      let userLastName=document.getElementById('nom');        
      userLastName.classList.add('valid');
      document.querySelector('.nom').textContent=""
  };
})
// Prenom:
document.getElementById('prenom').addEventListener('input', function(event) {
  let prenom=event.target.value


  if(prenom.length>50){
      let userFirstName=document.getElementById('prenom');
      userFirstName.classList.add('invalid');
      userFirstName.classList.remove('valid')
      document.querySelector('.prenom').textContent="Le prénom doit comporter moins de 50 caractères."
  }else{
      let userFirstName=document.getElementById('prenom');        
      userFirstName.classList.add('valid');
      document.querySelector('.prenom').textContent=""
  };
})

// Email:

document.getElementById('email').addEventListener('input', function(event) {
  let Email=event.target.value
  let validEmail=Email.match('[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$');


  if(!validEmail){
      let userEmail=document.getElementById('email');
      userEmail.classList.add('invalid');
      userEmail.classList.remove('valid')
      document.querySelector('.email').textContent="Veuillez mettre un email valide.";
    
  }else{
      let userEmail=document.getElementById('email');        
      userEmail.classList.add('valid');
      document.querySelector('.email').textContent=""
  };
})

// Password:

document.getElementById('password').addEventListener('input', function(event) {
  let password=event.target.value
  let validPassword=password.match(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/);


  if(!validPassword){
      let userPassword=document.getElementById('password');
      userPassword.classList.add('invalid');
      userPassword.classList.remove('valid')
      document.querySelector('.password').textContent="Le mot de passe doit comporter au moins 8 caractères avec au moins une majuscule, une minuscule."

      
  }else{
      let userPassword=document.getElementById('password');        
      userPassword.classList.add('valid');
      document.querySelector('.password').textContent=""
  };
})

// Confirm password:

document.getElementById('confirm_password').addEventListener('input', function(event) {
  let confirm_password=event.target.value
  let password= document.getElementById('password').value
  


  if(confirm_password!==password){
      let userconfirm_password=document.getElementById('confirm_password');
      userconfirm_password.classList.add('invalid');
      userconfirm_password.classList.remove('valid')
      document.querySelector('.confirm_password').textContent="Les mots de passe ne correspondent pas."
  }else{
      let userconfirm_password=document.getElementById('confirm_password');        
      userconfirm_password.classList.add('valid');
      document.querySelector('.confirm_password').textContent=""
  };
})
