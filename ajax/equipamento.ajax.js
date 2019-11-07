
$(document).ready(function(){
    
    /*Cadastrar Equipamento*/
    /*Pegar o form*/
    $('form[name="form_cad_equipamento"]').submit(function(){

        /*Colocar os dados do form em uma variavel*/
        var formEqui = $(this)
        /*Pegar o botao q faz o sumit no form 
        apenas para dar efeito depois*/
        var botao = $(this).find(':button')

        $.ajax({
            url: "../controller/equipamento.controller.php",
            type: "POST",
            data: "acao=cadastrar_equi&" + formEqui.serialize(),
            beforeSend: function(){
                botao.attr('disabled', true)
            },
            success: function(retorno){

                console.log(retorno);

                swal({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Equipamento cadastrado',
                    button: true,
                    timer: 2000
                  }) 
                  botao.attr('disabled', false)     
            }
        })
        /*TESTE exibi os dados enviados por post*/
        console.log($(this).serialize());
        return false;/*Para parar*/
    })


    /*Listar Equipamento*/
    function ConsultarEquipamento(url,acao,atualiza) {/*Atualiza serve para recarregar a tabela no caso de uma alteração*/
        $.post(
            url,
            {acao: acao},
            function(retorno){
                /*Instanciar os locais para exibir*/
                var tbody = $('.table').find('tbody')//find serve para pegar um elemento filho de outro elemento
                var imagem = tbody.find('.load')
                
                if (atualiza == true) {
                    tbody.html(retorno)    
                }else{
                    imagem.fadeOut('fast', function(){
                        tbody.html(retorno)
                    })
                }
            })
        
    }
    ConsultarEquipamento('../controller/equipamento.controller.php','consultar_equi')/*Usar o metodo para exibir na tabela ao iniciar*/



})