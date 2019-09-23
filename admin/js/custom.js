$(document).ready(function(){

    $('form[name="form_login"]').submit(function(){
        
        var formA = $(this)
        var botao = $(this).find(':button')

        $.ajax({//retorna os dados vindo do php
            url: "ajax/controller.php",
            type: "POST",
            data: "acao=login&" + formA.serialize(),
            beforeSend: function(){
                botao.attr('disabled', true)
                $('.load').fadeIn('slow')
            },
            success: function(retorno){
                $('.load').fadeOut('slow', function(){
                    botao.attr('disabled',false)
                })
                
                //console.log(retorno)               
                if (retorno === 'vazio') {
                    msg('É preciso informar o Login e Senha para continuar','alerta')
                }
                else if (retorno === 'naoexiste') {
                    msg('Este login não foi encontrado em nossos registros' , 'erro')
                }
                else if (retorno === 'diferentesenha') {
                    msg('Senha digitada não corresponde a este login, verifique e tente novamente', 'info')
                }
                else if (retorno === 'nivel') {
                    msg('Você não tem permissão para continuar' , 'erro')
                }
                else{
                    formA.fadeOut('fast',function(){
                        msg('Login efetuado com sucesso, aguarde....','sucesso')
                        $('#load').fadeIn('slow') //mostrar                     
                        
                    })//ocultar
                   
                    setTimeout(function(){
                        $(location).attr('href','painel.php')
                    }, 3000)                   
                }
            }
        })
        // var botao = $(this).find(':button')
        // botao.attr('disabled',true)
        // botao.html('Aguarde Carregando...')
        // console.log($(this).serialize())
        return false;
    })
    //funçoes gerais
    function msg(msg,tipo){
        var retorno = $('.retorno');
        
        //validar o tipo da mensagem
        var tipo =  (tipo === 'sucesso') ? 'success' : 
                    (tipo ==='alerta')   ? 'warning' :
                    (tipo === 'erro')    ? 'danger' :
                    (tipo === 'info')    ? 'info' : 
                    alert('INFORME MENSAGENS DE SUCCESSO,ALERTA,ERRO E INFO');

        retorno.empty().fadeOut('fast', function(){
            return $(this).html('<div class="alert alert-'+tipo+'">'+msg+'</div>').fadeIn('slow')
        });

        setTimeout(function(){
            retorno.fadeOut('slow').empty()
        }, 6000)
    }

})