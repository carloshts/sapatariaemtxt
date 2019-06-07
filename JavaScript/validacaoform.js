$(document).ready(function(){
                $('#formulario').validate({
                    rules:{
                        nome:{
                            required: true,
                            minlength: 3
                        },
                        cpf:{
                            required: true,
                            cpf: true
                        },
                        ctps:{
                            required:true
                        },
                        sexo:{
                            required:true
                        },
                        placa:{
                            required:true
                        },
                        cargo:{
                            required:true
                        },
                        valor:{
                            required:true
                        },
                        tipo:{
                            required:true
                        },
                        previsao:{
                            required:true
                        },
                        cor:{
                            required:true
                        },
                        ano:{
                            required:true
                        },
                        marca:{
                            required:true
                        },
                        Orca:{
                            required:true
                        },
                        entrada:{
                            required:true
                        },
                        saida:{
                            required:true
                        },
                        modelo:{
                            required:true
                        },
                        data:{
                            required:true
                        },
                        hora:{
                            required:true
                        },
                        dtinicio:{
                            required:true
                        },
                        Adtinicio:{
                            required:true
                        },
                        Adttermino:{
                            required:true
                        },
                        forma:{
                            required:true
                        },
                        quantidade:{
                            required:true
                        },
                        validade:{
                            required:true
                        },
                        sal:{
                            required:true
                        },
                        dtnasc:{
                          required: true
                        },
                        end:{
                            required:true
                        },
                        tel:{
                            required:true
                        },
                        usuario:{
                            required:true
                        },
                        senha:{
                            required:true
                        },
                        confirmsenha:{
                            required:true
                        },
                        idordemservico:{
                            required:true
                        },
                        servico:{
                            required:true
                        },
                        ccpf:{
                            required: true
                        },
                        funcionario:{
                            required:true
                        },
                        email:{
                            required:true
                        }
                    },
                    
                    messages:{
                        nome:{
                            required: "Campo obrigatório.",
                            minlength: "Digite pelo menos 3 caracteres."
                        },
                        cpf:{
                            required: "Campo obrigatório."    
                        },
                        ctps:{
                            required: "Campo obrigatório."
                        },
                        sexo:{
                            required: "Campo obrigatório."
                        },
                        cargo:{
                            required: "Campo obrigatório."
                        },
                        valor:{
                            required: "Campo obrigatório."
                        },
                        tipo:{
                            required: "Campo obrigatório."
                        },
                        placa:{
                            required: "Campo obrigatório."
                        },
                        data:{
                            required: "Campo obrigatório."
                        },
                        ccpf:{
                            required: "Campo obrigatório."
                        },
                        hora:{
                            required: "Campo obrigatório."
                        },
                        dtinicio:{
                            required: "Campo obrigatório."
                        },
                        Adtinicio:{
                            required: "Campo obrigatório."
                        },
                        Adttermino:{
                            required: "Campo obrigatório."
                        },
                        forma:{
                            required: "Campo obrigatório."
                        },
                        previsao:{
                            required: "Campo obrigatório."
                        },
                        cor:{
                            required: "Campo obrigatório."
                        },
                        ano:{
                            required: "Campo obrigatório."
                        },
                        marca:{
                            required: "Campo obrigatório."
                        },
                        Orca:{
                            required: "Campo obrigatório."
                        },
                        entrada:{
                            required: "Campo obrigatório."
                        },
                        saida:{
                            required: "Campo obrigatório."
                        },
                        modelo:{
                            required: "Campo obrigatório."
                        },
                        datahora:{
                            required: "Campo obrigatório."
                        },
                        quantidade:{
                            required: "Campo obrigatório."
                        },
                        validade:{
                            required: "Campo obrigatório."
                        },
                        sal:{
                            required: "Campo obrigatório."
                        },
                        dtnasc:{
                            required: "Campo obrigatório."
                        },
                        end:{
                            required: "Campo obrigatório."
                        },
                        tel:{
                            required: "Campo obrigatório."
                        },
                        usuario:{
                            required: "Campo obrigatório."
                        },
                        idordemservico:{
                            required: "Campo obrigatório."
                        },
                        servico:{
                            required: "Campo obrigatório."
                        },
                        funcionario:{
                            required: "Campo obrigatório."
                        },
                        senha:{
                            required: "Campo obrigatório."
                        },
                        email:{
                            required: "Campo obrigatório."
                        },
                        confirmsenha:{
                            required: "Campo obrigatório."
                        }
                    }
                });
            });


