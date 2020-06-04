function addQuestion(){
  event.preventDefault();
  // crée un nouvel élément box_container
    var box_container = document.createElement("div");
    var question = document.createElement("input");
    var response = document.createElement("input");
  // Attribution de class
    question.className = 'box_container';
  // Retrouver le formulaire qui va le contenir
    var formulaire = document.getElementByClassName('form');
  // ajoute au formulaire, la div crée
    formulaire.appendChild(div);
}

function addResponse(){
  //Un formulaire se recharge automatique dès qu'on ajout un input donc on prevent("empêche") l'évenement..
    event.preventDefault();
  // crée un nouvel élément box_container
    var input = document.createElement("input");
  // Initialisation de l'input
    input.className = 'response';
    input.value = "";
    input.type = "text";
    input.placeholder = "Veuillez saisir la(les) réponse(s) possible(s)";
    input.name = "response";
  // Retrouver le formulaire qui va le contenir
    var container = document.getElementById('response_container');
  // ajoute au formulaire, la div crée
    container.appendChild(input);



}
