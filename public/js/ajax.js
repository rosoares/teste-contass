function cadastrarTarefa() {

    //Recupera os dados que vieram do formuário de cadastro

    var descricao = $("#descricao").val();
    var data = $("#data").val();
    var usuario = $("#usuario").val();
    var token = $("#token").val();

    //Chama a API AJAX da biblioteca JQuery para fazer a requisção assícrona
    $.ajax({
        method: "POST",
        url: '/cadastrartarefa',
        data: {
            "_token": token,
            "descricao": descricao,
            "data": data,
            "usuario": usuario
        },
        success:
            function (data) {
                alert(data);
            }
    })
}

function atualizarTarefa() {

    //Recupera os dados que vieram do formuário de atualização

    var id = $("#id").val();
    var descricao = $("#descricao").val();
    var data = $("#data").val();
    var usuario = $("#usuario").val();
    var token = $("#token").val();

    //Chama a API AJAX da biblioteca JQuery para fazer a requisção assícrona
    $.ajax({
        method: "POST",
        url: '/atualizartarefa',
        data: {
            "_token": token,
            "descricao": descricao,
            "data": data,
            "usuario": usuario,
            "id": id
        },
        success:
            function (data) {
                alert(data);
                location.reload();
            }
    })
}

function apagarTarefa(id, token) {
    //Chama a API AJAX da biblioteca JQuery para fazer a requisção assícrona
    $.ajax({
        method: "POST",
        url: '/apagartarefa',
        data: {
            "id": id,
            "_token": token
        },
        success:
            function (data) {
                alert(data);
                location.reload();
            }
    })
}