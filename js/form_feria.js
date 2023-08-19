//funcion para descargar el archivo Feria Empresarial
function descargarArchivoFeriaEmpresarial() {
    var archivoFeria = "./resources/Presentacion-encuentro-de-investigacion.pptx"; // Reemplaza "ruta_archivo" con la ruta real de tu archivo
    // Obtén la extensión del archivo seleccionado
    var extensionFeria = archivoFeria.split('.pptx').pop().toLowerCase();
    // Define el nombre del archivo para descarga
    var nombreArchivoFeria = "Presentacion-encuentro-de-investigacion" + extensionFeria;
    // Crea un enlace <a> temporal para la descarga
    var enlaceDescargaFeria = document.createElement('a');
    enlaceDescargaFeria.href = archivoFeria;
    enlaceDescargaFeria.download = nombreArchivoFeria;
    // Simula un clic en el enlace para iniciar la descarga
    enlaceDescargaFeria.click();
}


$(document).ready(function(){
    $("#form-feria").validate({

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
            }
        },
        messages:{
            nombreInstitucion:{
                required: "Define el nombre de la institucion"
            },
            participantes:{
                required: "Ingresa el numero de participantes",
                number:"Este es un campo numerico"
            },
            tituloProyecto:{
                required:"Este campo es requerido"
            }
        }

    });
})
