//Form admin productAdd.php


document.getElementById('promo').addEventListener("change", function (event) {
  let isPromo= event.target.value
  
      if (isPromo == 1) {
        let prixBarre=document.getElementById('prix_barre');
        prixBarre.classList.remove('visually-hidden');
        
  
      }else {
        prixBarre.classList.remove('visually-hidden');
  
      }
  })
  const selectElement = document.querySelector(".ice-cream");
  const result = document.querySelector(".result");
  
 
  