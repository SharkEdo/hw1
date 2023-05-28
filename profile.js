function fetchResponse(response) {
    if (!response.ok) {return null};
    return response.json();
}

function fetchSongsJson(json) {
    console.log("Fetching...");
    console.log(json);
    if (!json.length) {noResults(); return;}
    
    const container = document.getElementById('results');
    container.innerHTML = '';
    container.className = 'Command';

    for (let Ele in json) {
		
        const card = document.createElement('div');
        card.dataset.id = json[Ele].content.id;
        card.classList.add('Command');
		
        const Command = document.querySelectorAll(".Command")
        const Commandinfo = document.createElement('div');
        Commandinfo.classList.add('Commandinfo');
        card.appendChild(Commandinfo);
		
        const infoContainer = document.createElement('div');
        infoContainer.classList.add("infoContainer");
        Commandinfo.appendChild(infoContainer);

        const info = document.createElement('div');
        info.classList.add("info");
        infoContainer.appendChild(info);
		
        const name = document.createElement('strong');
        name.innerHTML = json[Ele].content.title;
        info.appendChild(name);
		
        const Desc = document.createElement('a');
        Desc.innerHTML = json[Ele].content.description;
        info.appendChild(Desc);
        container.appendChild(card);
	}
}

function noResults() {
    // Definisce il comportamento nel caso in cui non ci siano contenuti da mostrare
    const container = document.getElementById('results');
    container.innerHTML = '';
    const nores = document.createElement('div');
    nores.className = "nores";
    nores.textContent = "Nessun risultato.";
    container.appendChild(nores);
  }


function fetchSongs() {
        fetch("fetch_C.php").then(fetchResponse).then(fetchSongsJson);
}

fetchSongs();

/*HTML ----------------------------------------------------------------------------*/

function fetchResponseh(response) {
    if (!response.ok) {return null};
    return response.json();
}

function fetchSongsJsonh(json) {
    console.log("Fetching...");
    console.log(json);
    if (!json.length) {noResultsh(); return;}
    
    const containerh = document.getElementById('resultsHTML');
    containerh.innerHTML = '';
    containerh.className = 'Command';

    for (let Ele in json) {
		
        const cardh = document.createElement('div');
        cardh.dataset.id = json[Ele].content.id;
        cardh.classList.add('Command');
		
        const Commandh = document.querySelectorAll(".Command")
        const Commandinfoh = document.createElement('div');
        Commandinfoh.classList.add('Commandinfo');
        cardh.appendChild(Commandinfoh);
		
        const infoContainerh = document.createElement('div');
        infoContainerh.classList.add("infoContainer");
        Commandinfoh.appendChild(infoContainerh);

        const infoh = document.createElement('div');
        infoh.classList.add("info");
        infoContainerh.appendChild(infoh);
		
        const nameh = document.createElement('strong');
        nameh.innerHTML = json[Ele].content.title;
        infoh.appendChild(nameh);
		
        const Desch = document.createElement('a');
        Desch.innerHTML = json[Ele].content.description;
        infoh.appendChild(Desch);
        containerh.appendChild(cardh);
	}
}

function noResultsh() {
    // Definisce il comportamento nel caso in cui non ci siano contenuti da mostrare
    const containerh = document.getElementById('resultsHTML');
    containerh.innerHTML = '';
    const noresh = document.createElement('div');
    noresh.className = "nores";
    noresh.textContent = "Nessun risultato.";
    containerh.appendChild(noresh);
  }


function fetchSongsh() {
        fetch("fetch_HTML.php").then(fetchResponseh).then(fetchSongsJsonh);
}

fetchSongsh();