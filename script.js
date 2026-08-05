const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");

const temaGuardado = localStorage.getItem("modo-oscuro");

if (temaGuardado === "activo") {
    cuerpo.classList.add("oscuro");
    botonModo.textContent = "☀️ Modo Día";
} else {
    cuerpo.classList.remove("oscuro");
    botonModo.textContent = "🌙 Modo Noche";
}

function alternarModo() {
    cuerpo.classList.toggle("oscuro");
    const esOscuro = cuerpo.classList.contains("oscuro");
    
    if (esOscuro) {
        botonModo.textContent = "☀️ Modo Día";
        localStorage.setItem("modo-oscuro", "activo");
    } else {
        botonModo.textContent = "🌙 Modo Noche";
        localStorage.setItem("modo-oscuro", "inactivo");
    }
}

botonModo.addEventListener("click", alternarModo);

const formularioPedido = document.querySelector("#form-pedido");
const avisoPedido = document.querySelector("#error-pedido");

function revisarPedido(event) {

  event.preventDefault();
  const nombre = document.querySelector("#nombre").value.trim();
  const correo = document.querySelector("#correo").value.trim();
  const mensaje = document.querySelector("#mensaje").value.trim();

  if (nombre === "") {
   
    avisoPedido.textContent = "Falta tu nombre, caserito.";
    avisoPedido.classList.add("error");
    avisoPedido.classList.remove("exito");
  } else if (correo.includes("@") === false) {
   
    avisoPedido.textContent = "Ese correo no parece correo: le falta el @.";
    avisoPedido.classList.add("error");
    avisoPedido.classList.remove("exito");
  } else if (mensaje === "") {
    
    avisoPedido.textContent = "No olvides escribir tu consulta o mensaje.";
    avisoPedido.classList.add("error");
    avisoPedido.classList.remove("exito");
  } else {
    
    avisoPedido.textContent = "Consulta recibida, caserito. Te contactamos hoy.";
    avisoPedido.classList.add("exito");
    avisoPedido.classList.remove("error");
    
    formularioPedido.reset();
  }
}

formularioPedido.addEventListener("submit", revisarPedido);
