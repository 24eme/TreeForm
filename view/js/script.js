function addResponse(div){
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
    var container = document.getElementById(div);
  // ajoute au formulaire, la div crée
    container.appendChild(input);

};

var idCount = 2;

function addQuestion(){
  //Evite le rechargement de la page
  event.preventDefault();

  // Retrouver le formulaire qui va le contenir
    var global_container = document.getElementById('global_container');
  // crée un nouvel élément box_container
    var box_container = document.createElement("div");

    //Création question et réponse
    var labelQ = document.createElement("label");
    var textQ = document.createTextNode("Question");
    labelQ.appendChild(textQ);
    var question = document.createElement("input");


    var labelR = document.createElement("label");
    var textR = document.createTextNode("Réponse");
    labelR.appendChild(textR);
    var divR = document.createElement("div");
    divR.id = "response_container"+idCount++;

    //Creation des réponses
    var response = document.createElement("input");
    var responseC1 = response.cloneNode(true);
    var responseC2 = response.cloneNode(true);

    var br = document.createElement("br");
    var brC1 = br.cloneNode(true);
    var brC2 = br.cloneNode(true);

    // Optimisation potentielle : déclarer en dehors de la fonction pour gagner de la mémoire sur la pile ou le tas ?
      response.className = "response";
      response.type = "text";
      response.placeholder = "Veuillez saisir la(les) réponse(s) possible(s)";
      response.name = "response";

      //CLonage des deux autres réponses
      responseC1.className = "response"
      responseC1.type = "text";
      responseC1.placeholder = "Veuillez saisir la(les) réponse(s) possible(s)";
      responseC1.name = "response";

      responseC2.className = "response";
      responseC2.type = "text";
      responseC2.placeholder = "Veuillez saisir la(les) réponse(s) possible(s)";
      responseC2.name = "response";


    //Ajout du btn Ajouter une reponse
    var divMore = document.createElement("div");
    divMore.className = "more more_response";

    var a = document.createElement("a");
    a.setAttribute("onclick","addResponse(this.parentNode.parentNode.id)");
    var img = document.createElement("img");
    img.src = "img/add.png"
    var span = document.createElement("span");
    var textAR= document.createTextNode("Ajouter une réponse");

    span.appendChild(textAR);
    a.appendChild(img);
    a.appendChild(span);
    divMore.appendChild(a);


    //
    divR.appendChild(response);
    divR.appendChild(br);

    divR.appendChild(responseC1);
    divR.appendChild(brC1);

    divR.appendChild(responseC2);
    divR.appendChild(brC2);
    
    divR.appendChild(divMore);

    var trait = document.createElement("hr");

  // Attribution de class
    box_container.className = 'box_container';
  //Initialisation des input // QUESTION:  et reponse
    question.className = "question";
    question.type = "text";
    question.placeholder = "Veuillez saisir la question";
    question.name = "question";


    var formulaire = document.getElementById("form");

    box_container.appendChild(labelQ);
    box_container.appendChild(question);
    box_container.appendChild(labelR);
    box_container.appendChild(divR);
    box_container.appendChild(trait);

    //Ajouter au formulaire
    global_container.appendChild(box_container);

}
