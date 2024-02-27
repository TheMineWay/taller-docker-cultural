const fraseElement = document.getElementsByTagName('h1')[0];

function init() {
    console.log(frase);
}

// Nos aseguramos que se ha inicializado "frase"
let interval = null;
interval = setInterval(() => {
    if (frase) {
        clearInterval(interval);
        init();
    }
}, 100);