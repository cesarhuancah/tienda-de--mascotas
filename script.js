const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");

let esDia = true;
function alternarModo() {
    cuerpo.classList.toggle("oscuro");
    esDia = !esDia;
    if (esDia) {
        botonModo.textContent = "🌙 Modo Noche";
    } else {
        botonModo.textContent = "☀️ Modo Día";
    }
}
botonModo.addEventListener("click", alternarModo);
