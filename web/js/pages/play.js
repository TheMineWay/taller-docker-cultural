var frase;
const ALPHABET = "abcdefghijklmnñopqrstuvwxyzñç".split("");
const tryLetters = [];

const hasWon = () => {
  for (const letter of frase) {
    if (letter === " ") continue;
    if (!tryLetters.includes(letter)) return false;
  }
  return true;
};

const getFailedLetters = () =>
  tryLetters.filter((l) => l !== " " && !frase.includes(l));

const hasLost = () => getFailedLetters().length > 5;

const fraseElement = document.getElementsByTagName("h1")[0];
const failedLettersElement = document.getElementById("failed-letters");

const init = () => {
  updateSentenceUI();
};

// Nos aseguramos que se ha inicializado "frase"
let interval = null;
interval = setInterval(() => {
  if (frase) {
    clearInterval(interval);
    init();
  }
}, 100);

const updateSentenceUI = () => {
  let word = "";

  for (const letter of frase) {
    if (letter === " ") word += " ";
    else if (tryLetters.includes(letter)) word += letter;
    else word += "_";
  }

  fraseElement.innerHTML = word;

  failedLettersElement.innerHTML = getFailedLetters().join("");

  // Now check state
  if (hasWon()) {
    fraseElement.classList.add("won");
    fraseElement.innerHTML = frase; // Just in case
    return;
  }

  if (hasLost()) {
    fraseElement.classList.add("lost");
    fraseElement.innerHTML = frase;
  }
};

const onKeyPress = (key) => {
  if (typeof key !== "string" || hasLost() || hasWon()) return;

  if (
    !ALPHABET.includes(key.toLowerCase()) ||
    tryLetters.includes(key.toLocaleLowerCase())
  )
    return;

  tryLetters.push(key.toLowerCase());

  updateSentenceUI();
};

window.addEventListener("keypress", (ev) => onKeyPress(ev.key));
