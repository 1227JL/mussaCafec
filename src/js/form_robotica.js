$(document).ready(function(){
    $("#form-robotica").validate({

        rules:{
            categoria:{
                required: true,
            },
            InstitucionRobotica:{
                required: true,
            },
            tituloR:{
                required: true,
            },
            correo:{
                required:true,
                email:true
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
            InstitucionRobotica:{
                required: "Define el nombre de institucion"
            },
            tituloR:{
                required: "Define el titulo del proyecto"
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
                required:"Debes confirmar que no hay participantes registrados en otro proyecto",
            }
        }

    });
})

const Nparticipantes = document.getElementById('Nparticipantes');
const divParticipante = document.querySelector('.participantes');

Nparticipantes.addEventListener('change', mostrarInput);

function mostrarInput(e) {

    if(e.target.value === "2"){
        crearInput();
    }else{
        limpiarDiv();
    }

}

function limpiarDiv() {
    while (divParticipante.firstChild) {
        divParticipante.removeChild(divParticipante.firstChild)
    }
}


function crearInput() {
    const input = document.createElement('input')
    input.setAttribute('type', 'text')
    input.setAttribute('name', "participante2")
    input.setAttribute('id','participante2')
    input.setAttribute('placeholder', 'Nombre completo')

    const label = document.createElement('label')
    label.setAttribute('for', 'particpante2')
    label.textContent = "Participante 2"

    divParticipante.appendChild(label)
    divParticipante.appendChild(input)
    
}