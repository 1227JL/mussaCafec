//funcion para descargar el archivo Robotica
function descargarArchivoRobotica() {
    var archivoRobotica = "./resources/TORNEO-DE-ROBOTICA-SENA-CAFEC_esp_técnicas_cat.pdf"; // Reemplaza "ruta_archivo" con la ruta real de tu archivo
    // Obtén la extensión del archivo seleccionado
    var extensionRobotica = archivoRobotica.split('.pdf').pop().toLowerCase();
    // Define el nombre del archivo para descarga
    var nombreArchivoRobotica = "TORNEO-DE-ROBOTICA-SENA-CAFEC_esp_técnicas_cat" + extensionRobotica;
    // Crea un enlace <a> temporal para la descarga
    var enlaceDescargaRobotica = document.createElement('a');
    enlaceDescargaRobotica.href = archivoRobotica;
    enlaceDescargaRobotica.download = nombreArchivoRobotica;
    // Simula un clic en el enlace para iniciar la descarga
    enlaceDescargaRobotica.click();
}

$(document).ready(function(){
    $("#form-feria").validate({

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