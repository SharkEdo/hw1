//NASA -----------------------------------------------------------------------

function onJsonNasa(json) {
  console.log('JSON ricevuto');
  console.log(json);
  // Svuotiamo la libreria
  const MissionTab = document.querySelector('#nasa-view');
  MissionTab.innerHTML = '';
  // Leggi il numero di risultati
  let TotRes = json.collection.metadata.total_hits;
  console.log("Il numero di dati è:" + TotRes);
  // Mostriamone al massimo 10
  if(TotRes > 10)
    TotRes = 10;
  // Processa ciascun risultato
  
  for(let i=0; i<TotRes; i++)
  {
    // Leggi il documento
	const col = json.collection
    const item = col.items[i];
	console.log('----------------------')
	console.log('Item:');
	console.log(item);
	const data = item.data[0];
	console.log('Data:');
	console.log(data);
	const titled = data.title;
	console.log('Titled:');
	console.log(titled);
    // Leggiamo info
    if(!data.nasa_id)
    {
      console.log('Nasa_id mancante, salto');
      continue;
	}
	
	const Nasa_id = data.nasa_id;
	// Costruiamo l'URL della copertina
	const cover_url = 'https://images-assets.nasa.gov/image/' + Nasa_id + '/' + Nasa_id + '~thumb.jpg';
	// Creiamo il div che conterrà immagine e didascalia
	const Mission = document.createElement('div');
	Mission.classList.add('data');
	// Creiamo l'immagine
	const img = document.createElement('img');
	img.src = cover_url;
	// Creiamo la didascalia
	const caption = document.createElement('span');
	caption.textContent = titled;
	// Aggiungiamo immagine e didascalia al div
	Mission.appendChild(img);
	Mission.appendChild(caption);
	// Aggiungiamo il div alla libreria
	MissionTab.appendChild(Mission);
  }
}

function onResponseNasa(response) {
  console.log(Response);
  return response.json();
}

function searchNasa(event)
{
  // Impedisci il submit del form
  event.preventDefault();
  // Leggi valore del campo di testo
  const Mission_input = document.querySelector('#Mission');
  const Mission_value = encodeURIComponent(Mission_input.value);
  console.log('Eseguo ricerca: ' + Mission_value);
  // Prepara la richiesta
  //rest_url = 'Nasa_Content_Search.php?q=' + Mission_value;
  //console.log('URL: ' + rest_url);
  // Esegui fetch
  fetch('Nasa_Content_Search.php?q=' + Mission_value).then(onResponseNasa).then(onJsonNasa);
}

// Aggiungi event listener al form
const formNasa = document.querySelector('form#Nasa');
formNasa.addEventListener('submit', searchNasa)