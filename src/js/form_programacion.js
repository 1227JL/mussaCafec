$(document).ready(function(){
    $("#form-programacion").validate({

        rules:{
            categoria:{
                required: true,
            },
            Institucion:{
                required: true,
            },
            titulo:{
                required: true,
            },
            correo:{
                required:true,
                email:true
            },
            representante:{
                required:true
            },
            contacto:{
                required:true,
                number:true
            },
            confirmacion:{
                required:true
            }
        },
        messages:{
            categoria:{
                required: "Escoge tu categoria de participacion"
            },
            Institucion:{
                required: "Define el nombre de institucion"
            },
            titulo:{
                required: "Define nombre del Equipo"
            },
            representante:{
                required:"Define Nombre de representante"
            },
            correo:{
                required:"Este campo es requerido",
                email:"Ingresa una direccion de correo valida!"
            },
            contacto:{
                required:"Este campo es requerido",
                number:"Este es un campo numerico"
            },
            confirmacion:{
                required:"Debes confirmar que no hay participantes registrados en otra categoria.",
            }
        }

    });
})

const Nparticipantes = document.getElementById('Nparticipantes');
const divParticipante = document.querySelector('.participantes');

Nparticipantes.addEventListener('change', mostrarInput);

function mostrarInput(e) {
    const valor = e.target.value
    limpiarDiv();
    for(let i = 2; i <= valor; i++){
        
        const input = document.createElement('input')
        input.type = "text"
        input.name = `participante${i}`;
        input.id = `participante${i}`;
        input.setAttribute('placeholder', 'Nombre completo')

        const label = document.createElement('label')
        label.for = `participante${i}`
        label.textContent = `participante ${i}`

        divParticipante.appendChild(label)
        divParticipante.appendChild(input)
    }

}

function limpiarDiv() {
    while (divParticipante.firstChild) {
        divParticipante.removeChild(divParticipante.firstChild)
    }
}


