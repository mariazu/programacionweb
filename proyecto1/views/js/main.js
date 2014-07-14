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
        //funcion para la fecha implementada en los formularios
         $(function () {
                $('#datetimepicker5').datetimepicker({

                   language: 'es'
                    
                });
            });

         //funcion para la validacion del formulario de la pagina estadio
        $('#formE').bootstrapValidator({
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

            }


        });
        //funcion para la validacion del formulario de la pagina entrenador
        $('#formEn').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields:{

                pais:{
                    validators:{
                        notEmpty:{
                            message:'El pais es requerido'
                        },

                    }
                },

            }


        });
        //funcion para la validacion del formulario de la pagina integrante
        $('#formI').bootstrapValidator({
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
                apellido:{
                    validators:{
                        notEmpty:{
                            message:'El nombre es requerido'
                        },
                        regexp: {
                        regexp: /[a-zA-Z_]/,
                        message: 'El apellido solo puede contener letras'
                        }
                    }
                },
                peso:{
                    validators:{
                      notEmpty:{
                            message:'El peso es requerido'
                        },
                        integer:{
                            message:'El valor no es un entero'
                        }
                    }
                },
                estatura:{
                    validators:{
                       notEmpty:{
                            message:'La estatura es requerida'
                        },
                        integer:{
                            message:'El valor no es un entero'
                        }
                    }
                },
                Edad:{
                    validators:{
                        notEmpty:{
                            message:'La edad es requerida'
                        },
                        integer:{
                            message:'El valor no es un entero'
                        }
                    }
                },

                foto:{
                    validators:{

                        file:{
                            extension: 'jpeg,png',
                            type:'image/jpeg,image/png,',
                            maxSize: 2048*1024, //2 MB
                            message:'El archivo seleccionado no es valido'
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
        //funcion para la validacion del formulario de la pagina jugador
        $('#formJ').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields:{

                posicion:{
                    validators:{
                        notEmpty:{
                            message:'La posicion es requerida'
                        },
                        integer:{
                            message:'El valor no es un entero'
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

            }


        });
        //funcion para la validacion del formulario de la pagina pais
        $('#formPa').bootstrapValidator({
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
                bandera:{
                    validators:{
                        file:{
                            extension: 'jpeg,png',
                            type:'image/jpeg,image/png,',
                            maxSize: 2048*1024, //2 MB
                            message:'El archivo seleccionado no es valido'
                        }
                    }
                },

            }

        }); 
        //funcion para la validacion del formulario de la pagina posicion
        $('#formP').bootstrapValidator({
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
               
                abreviatura:{
                    validators:{
                        notEmpty:{
                            message:'Este campo es requerido'
                        }
                    }
                },

            }


        });
        //funcion para la validacion del formulario de la pagina equipo
        $('#formEq').bootstrapValidator({
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

                escudo:{
                    validators:{
                        file:{
                            extension: 'jpeg,png',
                            type:'image/jpeg,image/png,',
                            maxSize: 2048*1024, //2 MB
                            message:'El archivo seleccionado no es valido'
                        }
                    }
                },

            }


        });  
        //funcion para la validacion del formulario de la pagina continente
        $('#formCon').bootstrapValidator({
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

            }


        }); 
        //funcion para la validacion del formulario de la pagina entrenador

                                   
    //Fin del document.ready            
    });
