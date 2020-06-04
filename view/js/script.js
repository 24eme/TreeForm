//SE RAPPELER CHECK LES BTN ET NAVIGO AUBER

function addQuestion(){
  event.preventDefault();
  // crée un nouvel élément box_container
    var box_container = document.createElement("div");
    var labelQ = document.createElement("label");
    var question = document.createElement("input");


    var labelR = document.createElement("input");
    var textQ = document.createElement("");


    var response = document.createElement("input");
  // Attribution de class
    box_container.className = 'box_container';
  //Initialisation des input // QUESTION:  et reponse
    question.className = "question";
    question.className = "question";

  // Optimisation potentielle : déclarer en dehors de la fonction pour gagner de la mémoire sur la pile ou le tas ?
    response.className = "response";
    response.type = "text";
    response.placeholder = "Veuillez saisir la(les) réponse(s) possible(s)";
    response.name = "response";

    var formulaire = document.getElementById("form");


    box_container.appendChild("")
    box_container.appendChild()
    formulaire.appendChild(box_container);





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
    input.type = "text";
    input.placeholder = "Veuillez saisir la(les) réponse(s) possible(s)";
    input.name = "response";
  // Retrouver le formulaire qui va le contenir
    var container = document.getElementById('response_container');
  // ajoute au formulaire, la div crée
    container.appendChild(input);



}
