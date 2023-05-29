function onJson(json) {
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
		
	// Prendo i dati
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

function onResponse(response) {
  console.log('Risposta ricevuta');
  return response.json();
}

function search(event){
	console.log('click')
	fetch("C_Content_Search.php").then(onResponse).then(onJson);
    event.preventDefault();
}

btn = document.querySelector(".btn form");
btn = addEventListener("submit", search);


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
  formData.append('id', card.dataset.id);
  formData.append('title', card.dataset.title);
  formData.append('description', card.dataset.description);
  fetch("Save_C.php", {method: 'post', body: formData}).then(dispatchResponse, dispatchError);
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
