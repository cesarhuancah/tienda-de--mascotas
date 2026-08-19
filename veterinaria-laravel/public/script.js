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

if (botonModo) {
    botonModo.addEventListener("click", alternarModo);
}

const formularioPedido = document.querySelector(".formulario-contacto");
const avisoPedido = document.querySelector("#error-pedido");

if (formularioPedido) {
    
    function revisarPedido(event) {
        event.preventDefault();
        
        const inputNombreMascota = document.querySelector("#nombre-mascota");
        const inputEspecie = document.querySelector("#especie");
        const inputPropietario = document.querySelector("#propietario");
        
        const inputNombreContacto = document.querySelector("#nombre");
        const inputCorreo = document.querySelector("#correo");
        const inputMensaje = document.querySelector("#mensaje");
        
        if (inputNombreMascota && inputEspecie && inputPropietario) {
            if (inputNombreMascota.value.trim() === "") {
                avisoPedido.textContent = "Falta el nombre de la mascota, caserito.";
                avisoPedido.className = "aviso error";
            } else if (inputEspecie.value.trim() === "") {
                avisoPedido.textContent = "Dinos qué especie es (perro, gato...).";
                avisoPedido.className = "aviso error";
            } else if (inputPropietario.value.trim() === "") {
                avisoPedido.textContent = "Falta el nombre del dueño o propietario.";
                avisoPedido.className = "aviso error";
            } else {
                avisoPedido.textContent = "Registrando mascota en el sistema...";
                avisoPedido.className = "aviso exito";
                
                // Forzamos el envío real de los datos hacia Laravel tras 1 segundo
                setTimeout(() => {
                    formularioPedido.submit();
                }, 1000);
            }
        }
        else if (inputNombreContacto && inputCorreo && inputMensaje) {
            const nombre = inputNombreContacto.value.trim();
            const correo = inputCorreo.value.trim();
            const mensaje = inputMensaje.value.trim();

            if (nombre === "") {
                avisoPedido.textContent = "Falta tu nombre, caserito.";
                avisoPedido.className = "aviso error";
            } else if (!correo.includes("@")) {
                avisoPedido.textContent = "Ese correo no parece correo: le falta el @.";
                avisoPedido.className = "aviso error";
            } else if (mensaje === "") {
                avisoPedido.textContent = "No olvides escribir tu consulta o mensaje.";
                avisoPedido.className = "aviso error";
            } else {
                avisoPedido.textContent = "Enviando consulta al equipo médico...";
                avisoPedido.className = "aviso exito";
                
                setTimeout(() => {
                    formularioPedido.submit();
                }, 1000);
            }
        }
    }

    formularioPedido.addEventListener("submit", revisarPedido);
}
