

const images = ["1"];

let indexImageActuelle = 0;

const flecheDroite = document.getElementById("fleche-droite");
const image = document.getElementById("image");

flecheDroite.addEventListener("click", evenementFlecheDroite);

function evenementFlecheDroite() {
  //on passe à l'image suivante
  indexImageActuelle++;

  //si on a dépassé le nombre d'image du tableau, on revient à la première
  if (indexImageActuelle > 4) {
    indexImageActuelle = 0;
  }

  //on change la propriété src de l'image.
  //Ex : "assets/images/" + "droit2.jpg" = "assets/images/droit2.jpg"
  image.src = "assets/images/" + images[indexImageActuelle];
}