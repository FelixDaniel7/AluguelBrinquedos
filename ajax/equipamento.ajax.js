$(document).ready(function(){

    var conteudo_modal = $('.modal-body')//para injetar conteudo na modal 
    
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
                  ConsultarEquipamento('../controller/equipamento.controller.php','consultar_equi',true)//para atualizar a tabela ao cadastrar 
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
                var tbody = $('#tabela_equipamento').find('tbody')//find serve para pegar um elemento filho de outro elemento
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
    
    /*ACAO DOS BOTOES*/
    //pegando o codequipamento da linha da tabela
    

    /*BOTAO EDITAR*/
    //encapsular a tabela, pegar os dados dela 
    $('#tabela_equipamento').on('click', '#btn_editar', function(){
        //Pegar o botao da tabela
        var CodEquipamento = $(this).attr('value')

        //pessar o form preenchido para modal
        $.post(
            '../controller/equipamento.controller.php',
            {acao: 'form_editar_equi',
            CodEquipamento: CodEquipamento}, 
             function(retornarform){
                $('#myModal').modal({backdrop: 'static'})//para modal nao fechar
                
                //colocando o form dentro da modal
                conteudo_modal.html(retornarform)
                var myModal = $('#myModal')
                myModal.find('.modal-title').text('Editar Equipamento')
             })
        console.log(CodEquipamento);  
    })

    /*BTN ATUALIZA 
    PEGAR OS DADOS DO FORM NA MODAL E MANDAR PARA O METODO COM O UPDATE*/
    $('#myModal').on('submit', 'form[name="form_editar_equipamento"]', function(){
        var form_dados = $(this)//formulario
        var btn_atualiza = form_dados.find('#btn_atualiza')

        $.ajax({
            url: '../controller/equipamento.controller.php',
            type: 'POST',
            data: 'acao=editar_equi&' + form_dados.serialize(),
            beforeSend: function(){
                btn_atualiza.attr('disabled',true)
            },
            success: function(retorno){
                
                if (retorno == 'atualizou') {
                    //form_dados.fadeOut('slow', function(){
                            
                        swal({
                            title: 'Atualizado com sucesso !',
                            icon: 'success'})
                    //})

                    console.log('Atualizou');
                    



                    ConsultarEquipamento('../controller/equipamento.controller.php','consultar_equi',true)
                    
                    // //depois de um tempinho a modal fecha
                    // setTimeout(function(){
                    //     $('#myModal').modal('hide')
                    // },10)

                    
                }
                else{
                    swal({
                        title: 'Você não alterou nenhum dado !',
                        icon: 'info'})

                        btn_atualiza.attr('disabled',false)

                    console.log('nao alterou nenhum dado');
                }
            }
        })
            return false //para nao atualizar a pagina

    })
    
    /*BOTAO EXCLUIR*/
    $('#tabela_equipamento').on('click', '#btn_excluir', function(){
        var CodEquipamento = $(this).attr('value')
        
        if(/*Confirmação*/
            swal({
                title: "Você tem certeza ?",
                text: "Está ação ira deletar todos os dados desse equipamento",
                icon: "warning",
                buttons: ['Cancelar','Continuar'],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    /*Passar o codequipamento para o metodo deletar*/
                    $.post("../controller/equipamento.controller.php",
                        {acao: 'excluir_equi', 
                        CodEquipamento: CodEquipamento}, 
                        function(retorno){//retorna se deu certo ou nao

                            if (retorno == 'deletou') {//se deu certo 
                                
                                swal({
                                    title: "Deletado com sucesso !", 
                                    icon: "success",
                                })
                                //atualiza a tabela
                                ConsultarEquipamento('../controller/equipamento.controller.php','consultar_equi',true)

                            } else {
                                //se deu algo errado ao deletar
                                swal({
                                    title: "Erro ao deletar equipamento !", 
                                    icon: "error",
                                })
                            }

                        })
                } 
                else {
                    //cancelar a ação
                    swal({
                        title: "Essa ação foi cancelada !",
                        icon: "info"
                    })
                }
            })
            ){

        }else{
            return false; //se deu muitaaaa merda e tudo deu errado
            console.log('Deu muito ruim ao deletar');
        }

    })

})