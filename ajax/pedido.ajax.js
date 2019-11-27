$(document).ready(function(){

    var conteudo_modal = $('#modal_pedido').find('.modal-body')
    var conteudo_modal_carrinho = $('#modalCarrinho').find('.modal-body')


    var dados_pessoais = $('#pessoais')
    var montagem = $('#montagem')
    var pedido = $('#pedido')

    function CampoVazio(campo){
        if (campo.val() == '') {
            campo.addClass('border border-danger')

            swal({position: 'top-end',icon: 'info',
            title: 'Campos em vermelho são obrigatorios !',
            button: true,timer: 2000})

            return false
        }
        else{
            return true
        }
        
    }

    dados_pessoais.find('#proximo').click(function(){
        var nome = $('#txtnome')
        //var celular = $('#txtcelular')
        var email = $('#txtemail')
        var cpf = $('#txtcpf')
        //var telefone = $('#txttelefone')
           
        CampoVazio(nome)
        CampoVazio(cpf)

        //campo email
        var emailFilter=/^.+@.+\..{2,}$/;
		var illegalChars= /[\(\)\<\>\,\;\:\\\/\"\[\]]/
        if(!(emailFilter.test(email.val())) || email.val().match(illegalChars)){

            email.addClass('border border-danger')
                
                swal({position: 'top-end',icon: 'info',
                title: 'Por favor, informe um email válido.',
                button: true,timer: 2000})
        }
        else if (nome.val() != '' && cpf.val() != '' && email.val() != '') {
            montagem.fadeIn('fast')
            dados_pessoais.fadeOut('fast')
        }
    })

    montagem.find('#anterior').click(function(){
            montagem.fadeOut('fast')
            dados_pessoais.fadeIn('fast')          
    })

    montagem.find('#proximo').click(function(){
        var cep = $('#txtcep')
        var endereco = $('#txtendereco')
        var numero = $ ('#txtnumero')
        var bairro = $('#txtbairro') 

        CampoVazio(numero)
        CampoVazio(cep)
        CampoVazio(bairro)
        CampoVazio(endereco)

        if (cep.val() != '' && endereco.val() != '' && numero.val() != '' && bairro.val() != '') {
            montagem.fadeOut('fast')
            pedido.fadeIn('fast')
        }
    })

    pedido.find('#anterior').click(function(){
        pedido.fadeOut('fast')
        montagem.fadeIn('fast')
    })


    $("button[carrinho='btn_add_carrinho']").click(function(){
        var CodEquipamento = $(this).attr('value')

        console.log('Cod enviado ' + CodEquipamento);
        $.post(
            '../controller/pedido.controller.php',
            {acao: 'add_carrinho',
            CodEquipamento: CodEquipamento},
            function(retorno){
                console.log(retorno);
                if (retorno == 'repetido') {
                    swal({
                        title: 'Este produto já foi adicionado !',
                        icon: 'info'
                    })
                }else if(retorno == 'adicionou'){
                    $('#modalCarrinho').modal({backdrop: true})
                    ConsultarCarrinho('../controller/pedido.controller.php','consultar_carrinho')
                }
                else{
                    swal({
                        title: 'Erro ao adicionar produto !',
                        icon: 'error'
                    })
                }
                
                

                
            })
    })
    $('#modalCarrinho').on('click', '#btn_excluir_carrinho', function(){
        var CodEquipamento = $(this).attr('value')

        console.log(CodEquipamento);
        

        
        $.post(
            '../controller/pedido.controller.php',
            {acao: 'del_carrinho', CodEquipamento: CodEquipamento},
            function(retorno){

                console.log(retorno);
                
                
                ConsultarCarrinho('../controller/pedido.controller.php','consultar_carrinho')
            })

            // $.ajax({
            //     url: "../controller/pedido.controller.php",
            //     type: "POST",
            //     data: "acao=del_carrinho&CodEquipamento="+CodEquipamento,
            //     beforeSend: function(){
            //         //botao.attr('disabled', true)
            //     },
            //     success: function(retorno){

            //         console.log(retorno)

            //         $('#modalCarrinho').modal({backdrop: true})
            //         ConsultarCarrinho('../controller/pedido.controller.php','consultar_carrinho',true)

            //         // if (retorno == 'cadastrou_pedido') {
            //         //     swal({
            //         //         title:"Pedido enviado !",
            //         //         icon:"success",
            //         //         timer: 600
            //         //     })
            //         // }
                    

            //     }
            // })
    })

    function ConsultarCarrinho(url, acao, atualiza){
        $.post(url, {acao: acao}, function(retorno){
            
            console.log('Consultar Carrinho modal');
                conteudo_modal_carrinho.html(retorno)
        })
    }
    ConsultarCarrinho('../controller/pedido.controller.php','consultar_carrinho',true)

    $('form[name="form_cad_cliente_pedido"]').submit(function(){
        var formPed = $(this)
        var data_de_uso = $('#txtdataUso')
        var horasAlugado = $('#txthorasAlugado')
        var data_Hora_Montagem = $('#txthoraMontagem')
        
        var brinquedo = $('#brinquedo')
        var formaPagamento = $('#txtformaPagamento')
            
        CampoVazio(data_Hora_Montagem)
        CampoVazio(data_de_uso)
        CampoVazio(horasAlugado)

        
        if (data_Hora_Montagem.val() != '' && data_de_uso.val() != '' && horasAlugado.val() != '') {
            $.ajax({
                url: "../controller/pedido.controller.php",
                type: "POST",
                data: "acao=cadastrar_ped&" + formPed.serialize(),
                beforeSend: function(){
                    //botao.attr('disabled', true)
                },
                success: function(retorno){

                    console.log(retorno)

                    if (retorno == 'cadastrou_pedido') {
                        swal({
                            title:"Pedido enviado !",
                            icon:"success",
                            timer: 600
                        })
                    }
                    

                }
            })
        }
        console.log($(this).serialize());
        return false;
    })

    $('#tabela_pedido').on('click', '#btn_editar', function(){

        var CodPedido = $(this).attr('value')

        $.post(
            '../controller/pedido.controller.php',
            {acao: 'form_editar_ped',
            CodPedido: CodPedido},
            function(retornarform){
                $('#modal_pedido').modal({backdrop: true})

                conteudo_modal.html(retornarform)
                var myModal = $('#modal_pedido')
                myModal.find('.modal-title').text('Editar Pedido')
            })
        console.log(CodPedido);
    })

    $('#modal_pedido').on('submit', 'form[name="form_editar_pedido"]', function(){
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

                setTimeout(function(){
                    $(location).attr('href','view.pedido.php')
                }, 1000)

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

                            //ConsultarPedido('../controller/pedido.controller.php','consultar_ped',true)
                            setTimeout(function(){
                                $(location).attr('href','view.pedido.php')
                            }, 1000)

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
