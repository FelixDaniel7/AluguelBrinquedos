$(document).ready(function(){

    var conteudo_modal = $('.modal-body')

    $('form[name="form_cad_pedido"]').submit(function(){

        var formPed = $(this)

        var botao = $(this).find(':button')

        $.ajax({
            url: "../controller/pedido.controller.php",
            type: "POST",
            data: "acao=cadastrar_ped&" + formPed.serialize(),
            beforeSend: function(){
                botao.attr('disabled', true)
            },
            success: function(retorno){

                console.log(retorno);

                swal({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Pedido cadastrado',
                    button: true,
                    timer: 2000
                })
                botao.attr('disabled', false)
                ConsultarPedido('../controller/pedido.controller.php','consultar_ped',true)
            }
        })

        console.log($(this).serialize());
        return false;
    })

    function ConsultarPedido(url,acao,atualiza){
        $.post(
            url,
            {acao: acao},
            function(retorno){

                var tbody = $('#tabela_pedido').find('tbody')
                var imagem = tbody.find('.load')

                if(atualiza == true){
                    tbody.html(retorno)
                }else{
                    imagem.fadeOut('fast', function(){
                        tbody.html(retorno)
                    })
                }
            })
    }

    ConsultarPedido('../controller/pedido.controller.php','contultar_ped')

    $('#tabela_pedido').on('click', '#btn_editar', function(){

        var CodPedido = $(this).attr('value')

        $.post(
            '../controller/pedido.controller.php',
            {acao: 'form_editar_ped',
            CodPedido: CodPedido},
            function(retornarform){
                $('#myModal').modal({backdrop: 'static'})

                conteudo_modal.html(retornarform)
                var myModal = $('#myModal')
                myModal.find('.modal-title').text('Editar Pedido')
            })
        console.log(CodPedido);
    })

    $('#myModal').on('submit', 'form[name="form_editar_pedido"]', function(){
        var form_dados = $(this)
        var btn_atualiza = form_dados.find('#btn_atualiza')

        $.ajax({
            url: '../controller/pedido.controller.php',
            type: 'POST',
            data: 'acao=editar_ped&' + form_dados.serialize(),
            beforeSend: function(){
                btn_atualiza.attr('disabled',true)
            },
            success: function(retorno){
                if(retorno == 'atualizou'){

                    swal({
                        title: 'Atualizado com sucesso!',
                        icon: 'success'})

                console.log('Atualizou');

                ConsultarPedido('../controller/pedido.controller.php','consultar_ped',true)

                }
                else{
                    swal({
                        title: "Você não alterou nenhum dado !",
                        icon: 'info'})

                        btn_atualiza.attr('disabled',false)
                    console.log('não alterou nenhum dado');
                }
            }
        })
        return false
    })

    $('#tabela_pedido').on('click', '#btn_excluir', function(){
        var CodPedido = $(this).attr('value')

        if(
            swal({
              title: "Você tem certeza ?",
              text: "Está ação irá deletar todos os dados desse pedido",
              icon: "warning",
              buttons: ['Cancelar','Continuar'],
              dangerMode: true,  
            })
            .then((willDelete) => {
                if(willDelete){
                    $.post("../controller/pedido.controller.php",
                    {acao: 'excluir_ped',
                    CodPedido: CodPedido},
                    function(retorno){

                        if(retorno == 'deletou'){

                            swal({
                                title:"Deletado com sucesso!",
                                icon:"success",
                            })

                            ConsultarPedido('../controller/pedido.controller.php','consultar_ped',true)

                        }else{

                            swal({
                                title: "Erro ao deletar o pedido!",
                                icon: "error",
                            })
                        }
                    })
                }
                else{

                    swal({
                        title: "Essa ação foi cancelada !",
                        icon: "Info"
                    })
                }
            })
            ){

        }else{
            return false;
            console.log('Deu Muito ruim ao deletar');
        }
    })

})