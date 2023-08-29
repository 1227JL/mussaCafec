//funcion para descargar el archivo Feria Empresarial
function descargarArchivoFeriaEmpresarial() {
    var archivoFeria = "../../resources/formatos/FormatoFeriaEmprerial_2023.docx"; // Reemplaza "ruta_archivo" con la ruta real de tu archivo
    // Define el nombre del archivo para descarga
    var nombreArchivoFeria = "FormatoFeriaEmprerial_2023.docx";
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
                number:true,
                min:1,
                max:10
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
                number:"Este es un campo numerico",
                max:"Maximo 10 participantes"
            },
            tituloProyecto:{
                required:"Este campo es requerido"
            }
        }

    });
})
