    //inicio del document.ready
    $(document).ready(function() {
        //funcion para el apartado de suscripcion de la pagina de inicio
        $(".ejemplo_4").fancybox({
            'autoScale' :false,
            'transitionIn' :'none',
            'transitionOut' :'none',
            'width' :680,
            'height' :450,
            'type' :'iframe'
        });

        //funcion fancybox para el apartado de portada de la pagina de inicio
            $(".fancybox-effects-a").fancybox({
                helpers: {
                    title : {
                        type : 'outside'
                    },
                    overlay : {
                        speedOut : 0
                    }
                }
            });
        //funcion para la fecha implementada en los formularios
         $(function () {
                $('#datetimepicker5').datetimepicker({

                   language: 'es'
                    
                });
            });


        //funcion para la validacion del formulario de la pagina revista
        $('#formRev').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields:{

                nombre:{
                    validators:{
                        notEmpty:{
                            message:'El nombre es requerido'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'El nombre solo puede contener letras'
                        }
                    }
                },
                portada:{
                    validators:{

                        file:{
                            extension: 'jpeg,png',
                            type:'image/jpeg,image/png,',
                            maxSize: 2048*1024, //2 MB
                            message:'El archivo seleccionado no es valido'
                        }
                    }
                },
                fecha:{
                    validators:{
                        notEmpty:{
                            message:'La fecha es requerido'
                        },
                    }
                },
                volumen:{
                    validators:{
                        notEmpty:{
                            message:'El nombre es requerido'
                        },
                        integer:{
                            message:'El valor no es un entero'
                        }
                    }
                },
                titulo:{
                    validators:{
                        notEmpty:{
                            message:'El titulo es requerido'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'El titulo solo puede contener letras'
                        }
                    }
                },
                subtitulo:{
                    validators:{
                        notEmpty:{
                            message:'El subtitulo es requerido'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'El subtitulo solo puede contener letras'
                        }
                    }
                },
                numero:{
                    validators:{
                      notEmpty:{
                            message:'El numero es requerido'
                        },
                        integer:{
                            message:'El valor no es un entero'
                        }
                    }
                },
                clave:{
                    validators:{
                        notEmpty:{
                            message:'La clave es requerida'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'La clave solo puede contener letras'
                        }
                    }
                },
                directorio:{
                    validators:{
                        notEmpty:{
                            message:'El directorio es requerido'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'El directorio solo puede contener letras'
                        }
                    }
                },
                editorial:{
                    validators:{
                        notEmpty:{
                            message:'La editorial es requerida'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'La editorial solo puede contener letras'
                        }
                    }
                },

                

            }


        });
        //Funcion para validar el formulario de la pagina autor
         $('#formA').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre:{
                    validators:{
                        notEmpty:{
                            message:'El nombre es requerido'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'El nombre solo puede contener letras'
                        }
                    }
                },
                email: {
                validators: {
                    emailAddress: {
                        message: 'The value is not a valid email address'
                    }
                }
            },
            apellidos:{
                    validators:{
                        notEmpty:{
                            message:'El apellido es requerido'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'El apellido solo puede contener letras'
                        }
                    }
            },
            
            email: {
                validators: {
                    notEmpty: {
                        message: 'El email es requerido'
                    },
                    emailAddress: {
                        message: 'No es un email valido'
                    }
                }
            },
        }
    });
    //Funcion para validar el formulario de la pagina autor
         $('#formE').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            status:{
                    validators:{
                        notEmpty:{
                            message:'El estatus es requerido'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'El estatus solo puede contener letras'
                        }
                    }
                },
            
        }
    });
        //Funcion para validar el formulario de la pagina articulo
         $('#formArt').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre:{
                    validators:{
                        notEmpty:{
                            message:'El nombre es requerido'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'El nombre solo puede contener letras'
                        }
                    }
                },
                resumen:{
                    validators:{
                        notEmpty:{
                            message:'El resumen es requerido'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'El resumen solo puede contener letras'
                        }
                    }
                },
                abstract:{
                    validators:{
                        notEmpty:{
                            message:'El abstract es requerido'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'El abstract solo puede contener letras'
                        }
                    }
                },
                introduccion:{
                    validators:{
                        notEmpty:{
                            message:'La introduccion es requerido'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'La introduccion solo puede contener letras'
                        }
                    }
                },
                metodologia:{
                    validators:{
                        notEmpty:{
                            message:'La metodologia es requerido'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'La metodologia solo puede contener letras'
                        }
                    }
                },
                contenido:{
                    validators:{
                        notEmpty:{
                            message:'El contenido es requerido'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'El contenido solo puede contener letras'
                        }
                    }
                },
            
        }
    });
        //funcion para mostrar los formularios entrenador y jugador en la misma pagina integrante (fancybox)
        $(".integrante").fancybox({
            'autoScale' :false,
            'transitionIn' :'none',
            'transitionOut' :'none',
            'width' :680,
            'height' :450,
            'type' :'iframe'
        });
        

                                   
    //Fin del document.ready            
    });
