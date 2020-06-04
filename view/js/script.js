function addQuestion(){

  // crée un nouvel élément box_container
    var question = document.createElement("div");
  // Attribution de class
    question.className = 'box_container';
  // Retrouver le formulaire qui va le contenir
    var formulaire = document.getElementByClassName('form');
  // ajoute au formulaire, la div crée
    formulaire.appendChild(div);
}

function addResponse(){
  // crée un nouvel élément box_container
    var response = document.createElement("input");
  // Attribution de class
    response.className = 'response';
  // Retrouver le formulaire qui va le contenir
    var formulaire = document.getElementByClassName('form');
  // ajoute au formulaire, la div crée
    formulaire.appendChild(div);


}
