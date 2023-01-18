const items = document.querySelectorAll('img');
const nbSlide = items.length;
const suivant = document.querySelector('.right');
const precedent = document.querySelector('.left');
let count = 0;
const titre =  document.getElementById("nom-mob");
texte =  document.getElementById("nomimage-0" ).value ;
                    
    titre.innerHTML = texte;


function slideSuivante(){
    items[count].classList.remove('active');

    if(count < nbSlide - 1){
        count++;
    } else {
        count = 0;
    }

    items[count].classList.add('active')
    console.log(count);

    texte =  document.getElementById("nomimage-"+count ).value ;
                    
   

    console.log(titre)
                        
    titre.innerHTML = texte;

}
suivant.addEventListener('click', slideSuivante)


function slidePrecedente(){
    items[count].classList.remove('active');

    if(count > 0){
        count--;
    } else {
        count = nbSlide - 1;
    }

    items[count].classList.add('active')
    
    texte =  document.getElementById("nomimage-"+count ).value ;
                    
   
    console.log(titre)
                        
    titre.innerHTML = texte;
    
    
    
}
precedent.addEventListener('click', slidePrecedente)

function keyPress(e){
    console.log(e);
    
    if(e.keyCode === 37){
        slidePrecedente();
    } else if(e.keyCode === 39){
        slideSuivante();
    }
}
document.addEventListener('keydown', keyPress)