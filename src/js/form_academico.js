const checkboxPoster = document.getElementById('checkbox-poster');
const checkboxPonente = document.getElementById('checkbox-ponente');
const seccionPoster = document.getElementById('poster');
const seccionPonente = document.getElementById('ponente');

// Mostrar u ocultar secciones según las categorías seleccionadas

function showForm(){
    if(checkboxPonente.checked == false){
        seccionPoster.style.display = 'block';
        seccionPonente.style.display = 'none';
    }else{ 
        seccionPonente.style.display = 'block' ;
        seccionPoster.style.display = 'none';
    }
    
}
checkboxPoster.addEventListener('change', showForm)
checkboxPonente.addEventListener('change', showForm)

showForm()

//Funcion para crear input dependiendo de la institucion
function mostrar() {
    var selectElement = document.getElementById("Institucion");
    var selectedOption = selectElement.options[selectElement.selectedIndex].value;

    var divExterna = document.querySelector(".mostrar-input-externa");
    var divSena = document.querySelector(".mostrar-input-sena");

    var inputExterna = divExterna.querySelector('input[type="text"]');
    var inputSenaTitulada = divSena.querySelector('input[name="titulada"]');
    var inputSenaFicha = divSena.querySelector('input[name="ficha"]');

    if (selectedOption === "Externa") {
        divExterna.style.display = "block";
        divSena.style.display = "none";
        inputSenaTitulada.value = ''; // Borra el valor de titulada
        inputSenaFicha.value = ''; // Borra el valor de ficha
    } else if (selectedOption === "SENA") {
        divExterna.style.display = "none";
        divSena.style.display = "block";
        inputExterna.value = ''; // Borra el valor de externa
    } else {
        divExterna.style.display = "none";
        divSena.style.display = "none";
        inputExterna.value = ''; 
        inputSenaTitulada.value = ''; 
        inputSenaFicha.value = ''; 
    }
}
mostrar();

//FUNCION PARA AGREGAR MAS PONENTES LIMITANDO A 3 COMO MAX
function crearCampos() {
    var selectElement = document.getElementById("Ponentes");
    var numPonentes = parseInt(selectElement.options[selectElement.selectedIndex].value);
    var contenedorPonentes = document.getElementById("contenedorPonentes");
    contenedorPonentes.innerHTML = "";

    for (var i = 1; i <= numPonentes; i++) {
        var divPonente = document.createElement("div");
        divPonente.className = "div-ponente";

        var nombreInput = document.createElement("input");
        nombreInput.type = "text";
        nombreInput.placeholder = "Nombre del ponente";
        nombreInput.name = "nombre" + i;
        nombreInput.className = "input input-ponente"; 
        divPonente.appendChild(nombreInput);

        var correoInput = document.createElement("input");
        correoInput.type = "email";
        correoInput.placeholder = "Correo del ponente";
        correoInput.name = "correo" + i;
        correoInput.className = "input input-ponente"; 
        divPonente.appendChild(correoInput);

        var contactoInput = document.createElement("input");
        contactoInput.type = "text";
        contactoInput.placeholder = "Número de contacto";
        contactoInput.name = "contacto" + i;
        contactoInput.className = "input input-ponente"; 
        divPonente.appendChild(contactoInput);

        contenedorPonentes.appendChild(divPonente);
    }
}
//funcion para descargar el archivo ponente
function descargarArchivoPonente() {
    var archivoPonencia = "../../resources/formatos/formatos_ponencia.rar"; // Reemplaza "ruta_archivo" con la ruta real de tu archivo
    // Define el nombre del archivo para descarga
    var nombreArchivoPonencia = "formatos_Ponencia.rar";
    // Crea un enlace <a> temporal para la descarga
    var enlaceDescargaPonencia = document.createElement('a');
    enlaceDescargaPonencia.href = archivoPonencia;
    enlaceDescargaPonencia.download = nombreArchivoPonencia;
    // Simula un clic en el enlace para iniciar la descarga
    enlaceDescargaPonencia.click();
}


//CREACION DE INPUT EN EL FORMULARIO DE POSTER
const participantesInput = document.getElementById('participantes');
const contenedorInputs = document.getElementById('contenedorParticipantes');

participantesInput.addEventListener('input', () => {
    contenedorInputs.innerHTML = ''; // Limpiamos el contenido previo 
    const numParticipantes = parseInt(participantesInput.value); 
    for (let i = 1; i <= numParticipantes; i++) {
        if (i > 3) {
            break; // Limitamos la creación a 6 divs
        }  
        const divInput = document.createElement('div');
        divInput.className = 'coolinput';
        
        const labelNombre = document.createElement('label');
        labelNombre.className = 'text';
        labelNombre.textContent = `Nombre del participante ${i}`;
        
        const inputNombre = document.createElement('input');
        inputNombre.type = 'text';
        inputNombre.name = 'participante'+i;
        inputNombre.className = "input";
        inputNombre.placeholder = `Participante ${i}`;
        
        const labelCorreo = document.createElement('label');
        labelCorreo.className = 'text';
        labelCorreo.textContent = `Correo del participante ${i}:`;
        
        const inputCorreo = document.createElement('input');
        inputCorreo.type = 'email';
        inputCorreo.name = "correo"+i;
        inputCorreo.className = "input";
        inputCorreo.placeholder = `Correo ${i}`;
        
        const labelContacto = document.createElement('label');
        labelContacto.className = 'text';
        labelContacto.textContent = `Contacto del participante ${i}:`;
        
        const inputContacto = document.createElement('input');
        inputContacto.type = 'text';
        inputContacto.name = "contacto"+i
        inputContacto.className = "input";
        inputContacto.placeholder = `Contacto ${i}`;
        
        divInput.appendChild(labelNombre);
        divInput.appendChild(inputNombre);
        divInput.appendChild(labelCorreo);
        divInput.appendChild(inputCorreo);
        divInput.appendChild(labelContacto);
        divInput.appendChild(inputContacto);
        
        contenedorInputs.appendChild(divInput);
    }
});
//funcion para descargar el archivo poster
function descargarArchivoPoster() {
    var archivoPoster = "../../resources/formatos/formatos_poster.rar"; // Reemplaza "ruta_archivo" con la ruta real de tu archivo
    var nombreArchivoPoster = "formatos_poster.rar";
    var enlaceDescargaPoster = document.createElement('a');
    enlaceDescargaPoster.href = archivoPoster;
    enlaceDescargaPoster.download = nombreArchivoPoster;
    enlaceDescargaPoster.click();
}

$(document).ready(function(){
    $("#form-ponente").validate({

        rules:{
            ejetematico:{
                required: true,
            },
            tipoInstitucion:{
                required: true,
            },
            titulo:{
                required: true,
            },
            numeroPonentes:{
                required:true
            },
            tipoProyecto:{
                required: true
            },
            archivo_1:{
                required:true
            },
            archivo_2:{
                required:true
            },
            titulada:{
                required: true,
            },
            ficha:{
                required: true,
                number: true
            },
            externa:{
                required:true
            },
            nombre1:{
                required:true
            },
            correo1:{
                required:true,
                email:true
            },
            contacto1:{
                required:true,
                number:true
            },
            nombre2:{
                required:true
            },
            correo2:{
                required:true,
                email:true
            },
            contacto2:{
                required:true,
                number:true
            },
            nombre3:{
                required:true
            },
            correo3:{
                required:true,
                email:true
            },
            contacto3:{
                required:true,
                number:true
            }
        },

        messages:{
            ejetematico:{
                required: "Define un eje tematico"
            },
            tipoInstitucion:{
                required: "Debes elegir una opcion"
            },
            titulo:{
                required:"Este campo es requerido"
            },
            numeroPonentes:{
                required:"Debes elegir una opcion"
            },
            tipoProyecto:{
                required:"Debes definir un titulo"
            },
            archivo_1:{
                required:"Debes elegir un archivo WORD"
            },
            archivo_2:{
                required:"Debes elegir un archivo PDF O Power point"
            },
            titulada:{
                required:"Define el nombre de la titulada"
            },
            ficha:{
                required:"Este campo es requerido",
                number:"Este es un campo numerico"
            },
            externa:{
                required:"Define la institucion participante"
            },
            nombre1:{
                required:"Este campo es requerido"
            },
            correo1:{
                required:"Este campo es requerido",
                email:"Introduce una direccion de correo valida"
            },
            contacto1:{
                required:"Este campo es requerido",
                number:"Este es un campo numerico"
            },
            nombre2:{
                required:"Este campo es requerido"
            },
            correo2:{
                required:"Este campo es requerido",
                email:"Introduce una direccion de correo valida"
            },
            contacto2:{
                required:"Este campo es requerido",
                number:"Este es un campo numerico"
            },
            nombre3:{
                required:"Este campo es requerido"
            },
            correo3:{
                required:"Este campo es requerido",
                email:"Introduce una direccion de correo valida"
            },
            contacto3:{
                required:"Este campo es requerido",
                number:"Este es un campo numerico"
            }
        }

    });

    $("#form-poster").validate({

        rules:{
            nombreInstitucion:{
                required: true,
            },
            participantes:{
                required: true,
                number:true
            },
            tituloProyecto:{
                required: true,
            },
            archivo:{
                required:true
            },
            participante1:{
                required:true
            },
            correo1:{
                required:true,
                email:true
            },
            contacto1:{
                required:true,
                number:true
            },
            participante2:{
                required:true
            },
            correo2:{
                required:true,
                email:true,
            },
            contacto2:{
                required:true,
                number:true
            },
            participante3:{
                required:true
            },
            correo3:{
                required:true,
                email:true,
            },
            contacto3:{
                required:true,
                number:true
            }
        },

        messages:{
            nombreInstitucion:{
                required: "Define este campo"
            },
            participantes:{
                required: "Define el numero de participantes",
                number:"Este es un campo numerico"
            },
            tituloProyecto:{
                required:"Define un titulo"
            },
            archivo:{
                required:"Debes elegir un archivo"
            },
            participante1:{
                required:"Este campo es requerido"
            },
            correo1:{
                required:"Este campo es requerido",
                email:"Introduce una direccion de correo valida"
            },
            contacto1:{
                required:"Este campo es requerido",
                number:"Este es un campo numerico"
            },
            participante2:{
                required:"Este campo es requerido"
            },
            correo2:{
                required:"Este campo es requerido",
                email:"Introduce una direccion de correo valida"
            },
            contacto2:{
                required:"Este campo es requerido",
                number:"Este es un campo numerico"
            },
            participante3:{
                required:"Este campo es requerido"
            },
            correo3:{
                required:"Este campo es requerido",
                email:"Introduce una direccion de correo valida"
            },
            contacto3:{
                required:"Este campo es requerido",
                number:"Este es un campo numerico"
            }
        }

    });

});