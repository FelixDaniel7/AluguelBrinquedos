$(document).ready(function(){

    var conteudo_modal = $('.modal-body')//para injetar conteudo na modal 
    
    var btn_cad = $('#btn_cadastra')


    /*Cadastrar Equipamento*/

    /*COLOCAR O FORM DE CADASTRO NA MODAL*/
    btn_cad.click(function(){

        $.post('../controller/equipamento.controller.php',
            {acao: 'form_cadastrar_equi'},
            
            function (formRetorno) {
                $('#modal_equipamento').modal({backdrop: true}) //chama a modal

                conteudo_modal.html(formRetorno)
            })
    })
    /*Pegar o form de cadastro na modal*/
    $('#modal_equipamento').on('submit','form[name="form_cad_equipamento"]',function(){

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

                if (retorno == 'cadastrou') {

                    swal({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Equipamento cadastrado !',
                        button: true,
                        timer: 900
                      }) 
                      botao.attr('disabled', false) //habilitar o botao
                      //somente se estiver na mesma pagina precisa atualizar a tabela
                      //ConsultarEquipamento('../controller/equipamento.controller.php','consultar_equi',true)//para atualizar a tabela ao cadastrar     
                      setTimeout(function(){
                        $(location).attr('href','view.equipamento.php')
                    }, 1000)
                }
                else{

                    swal({
                        title: "Erro ao cadastrar equipamento !", 
                        icon: "error",
                    })
                    botao.attr('disabled', false)

                } 
            }
        })
        /*TESTE exibi os dados enviados por post*/
        console.log($(this).serialize());
        return false;/*Para parar*/
    })


    /*Listar Equipamento*/
    /*function ConsultarEquipamento(url,acao,atualiza) {/*Atualiza serve para recarregar a tabela no caso de uma alteração
        $.post(
            url,
            {acao: acao},
            function(retorno){
                //Instanciar os locais para exibir
                var tbody = $('#tabela_equipamento').find('tbody')//find serve para pegar um elemento filho de outro elemento
                var imagem = tbody.find('.load')
                
                
                if (retorno == '') {
                    tbody.html('Nenhum dado registrado')
                }
                else if (atualiza == true) {
                    tbody.html(retorno)    
                }
                else if (retorno != ''){
                    imagem.fadeOut('fast', function(){//mostra o gif e exibe o conteudo
                        tbody.html(retorno)
                    })
                }
            })
        
    }*/
    //ConsultarEquipamento('../controller/equipamento.controller.php','consultar_equi')/*Usar o metodo para exibir na tabela ao iniciar*/
    
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
                $('#modal_equipamento').modal({backdrop: true})//para modal nao fechar
                
                //colocando o form dentro da modal
                conteudo_modal.html(retornarform)
                var modal_equipamento = $('#modal_equipamento')
                modal_equipamento.find('.modal-title').text('Editar Equipamento')
             })
        console.log(CodEquipamento);  
    })

    /*BOTAO ATUALIZAR
    PEGAR OS DADOS DO FORM NA MODAL E MANDAR PARA O METODO COM O UPDATE*/
    $('#modal_equipamento').on('submit', 'form[name="form_editar_equipamento"]', function(){
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
                    form_dados.fadeOut('fast')

                    $('#modal_equipamento').modal('hide')
                            
                    swal({
                        title: 'Atualizado com sucesso !',
                        icon: 'success'
                    })
                    //ConsultarEquipamento('../controller/equipamento.controller.php','consultar_equi',true)                    
                    setTimeout(function(){
                        $(location).attr('href','view.equipamento.php')
                    }, 1000)
                }
                else{
                    swal({
                        title: 'Você não alterou nenhum dado !',
                        icon: 'info'
                    })
                    btn_atualiza.attr('disabled',false)
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
                                    timer: 700
                                })
                                //atualiza a tabela
                                //ConsultarEquipamento('../controller/equipamento.controller.php','consultar_equi',true)
                                setTimeout(function(){
                                    $(location).attr('href','view.equipamento.php')
                                }, 1000)

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