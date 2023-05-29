function onJsonC(json) {
  console.log('JSON ricevuto');
  
  // Cancello la libreria
  const ResultBox = document.querySelector('#results');
  ResultBox.innerHTML = '';
  
  // Leggi il numero di risultati
	let NumRis = json.length;
    console.log(NumRis);
    if(NumRis > 20){
		NumRis = 20;
    }
	  
	for(let i=0; i<NumRis; i++){
		
	    const doc = json[i];
	    console.log(doc);
	    const id = doc.id;
	    if(!id){
		   console.log('Id mancante, salto');
		   continue;
	    }
	  
		const Box = document.createElement('div');
		Box.classList.add('ResBox');
    
	// Creo l'h1
		const title = doc.title;
		console.log(title);
		const Tit = document.createElement('h1');
		Tit.textContent = title;
	  
    // Creo la descrizione
		const desc = doc.description;
		console.log(desc);
		const caption = document.createElement('span');
		caption.textContent = desc;
		
	// Creo il like
		const saveForm = document.createElement('div');
        saveForm.classList.add("saveForm");
        Box.appendChild(saveForm);
        const save = document.createElement('div');
        save.value='';
        save.classList.add("save");
        saveForm.appendChild(save);
		saveForm.addEventListener('click',saveSong );
	
	//Mi salvo i dati
		Box.dataset.course = 'C';
		Box.dataset.id = doc.id;
		Box.dataset.title = doc.title;
		Box.dataset.description = doc.description;
	  
    // Aggiungo immagine e didascalia al div
		Box.appendChild(Tit);
		Box.appendChild(caption);
	  
    // Aggiungiamo il div alla libreria
		ResultBox.appendChild(Box);
	}
}

function onResponseC(response) {
  console.log('Risposta ricevuta');
  return response.json();
}

function searchC(event){
	console.log('click C')
	fetch("C_Content_Search.php").then(onResponseC).then(onJsonC);
    event.preventDefault();
}

ButtC = document.querySelector("form#C");
console.log(ButtC);
ButtC.addEventListener("submit", searchC);


/*HTML-------------------------------------*/

function onJsonH(json) {
  console.log('JSON ricevuto');
  
  // Cancello la libreria
  ResultBox = document.querySelector('#results');
  ResultBox.innerHTML = '';
  
  // Leggi il numero di risultati
	let NumRish = json.length;
    console.log(NumRish);
    if(NumRish > 20){
		NumRish = 20;
    }
	  
	for(let i=0; i<NumRish; i++){
		
	    const doch = json[i];
	    console.log(doch);
	    const idh = doch.id;
	    if(!idh){
		   console.log('Id mancante, salto');
		   continue;
	    }
	  
		const Boxh = document.createElement('div');
		Boxh.classList.add('ResBox');
    
	// Creo l'h1
		const titleh = doch.title;
		console.log(titleh);
		const Tith = document.createElement('h1');
		Tith.textContent = titleh;
	  
    // Creo la descrizione
		const desch = doch.description;
		console.log(desch);
		const captionh = document.createElement('span');
		captionh.textContent = desch;
		
	// Creo il like
		const saveForm = document.createElement('div');
        saveForm.classList.add("saveForm");
        Boxh.appendChild(saveForm);
        const save = document.createElement('div');
        save.value='';
        save.classList.add("save");
        saveForm.appendChild(save);
		saveForm.addEventListener('click',saveSong );
		
	// Prendo i dati
		Boxh.dataset.course = 'HTML';
		Boxh.dataset.id = doch.id;
        Boxh.dataset.title = doch.title;
		Boxh.dataset.description = doch.description;
	  
    // Aggiungo immagine e didascalia al div
		Boxh.appendChild(Tith);
		Boxh.appendChild(captionh);
	  
    // Aggiungiamo il div alla libreria
		ResultBox.appendChild(Boxh);
	}
}

function onResponseH(response) {
  console.log('Risposta ricevuta');
  return response.json();
}

function searchH(event){
	console.log('click H')
	fetch("HTML_Content_Search.php").then(onResponseH).then(onJsonH);
    event.preventDefault();
}

ButtH = document.querySelector("form#H");
console.log(ButtH);
ButtH.addEventListener("submit", searchH);

/*SAVE SONG-----------------------------------------------*/

function saveSong(event){
  // Preparo i dati da mandare al server e invio la richiesta con POST
  likecol = event.currentTarget;
  likecol.style.border = "5px solid green";
  console.log("Salvataggio")
  // get parent card
  const card = event.currentTarget.parentNode;
  console.log(card);
  const formData = new FormData();
  formData.append('course', card.dataset.course);
  formData.append('id', card.dataset.id);
  formData.append('title', card.dataset.title);
  formData.append('description', card.dataset.description);
  fetch("save_command.php", {method: 'post', body: formData}).then(dispatchResponse, dispatchError);
  event.stopPropagation();
}

function dispatchResponse(response) {

  console.log(response);
  return response.json().then(databaseResponse); 
}

function dispatchError(error) { 
  console.log("Errore");
}

function databaseResponse(json) {
  if (!json.ok) {
      dispatchError();
      return null;
  }
}


//OTHER-------------------------------------

function scroll(){
  const contatti = document.querySelector("footer");
  contatti.scrollIntoView();
}

contact = document.querySelector("#contact");
contact.addEventListener("click", scroll);
