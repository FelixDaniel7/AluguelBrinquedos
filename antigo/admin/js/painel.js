$(document).ready(function(){
    
    var janela = $('#janela')
    var conteudo = $('.modal-body')

    janela.click(function(){
        
        $.post('ajax/painel.controller.php',
            {acao: 'form_cad'},
        
            function(retorno){
                $('#myModal').modal({backdrop: 'static'})//para modal não fechar

                conteudo.html(retorno)
            })      
    })
    //recuperar o formulario com o post
    $("#myModal").on('submit','form[name="form_cad"]', function(){
        var form = $(this)
        var botao = form.find(':button')

        $.ajax({
            url: 'ajax/controller.php',
            type: 'POST',
            data: 'acao=cadastro&'+ form.serialize(),//pega tudo do formulario
            beforeSend : function(){
                botao.attr('disabled', true)
                $('.load').fadeIn('slow')
            },
            success: function(retorno){

                botao.attr('disabled', false)
                $('.load').fadeOut('slow')

                if (retorno == 'cadastrou') {
                    form.fadeOut('slow', function() {
                        msg('Administrador cadastrado com sucessso', 'sucesso')    
                    })
                    
                }
                else{
                    msg('Erro ao cadastrar administrador', 'erro')
                }
            }
        })
        return false;
    })

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