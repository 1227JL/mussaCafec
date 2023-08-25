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