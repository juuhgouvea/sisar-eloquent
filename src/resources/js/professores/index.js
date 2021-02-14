$('#pagina-cursos #js-cadastrar')
    .on('click', (event) => {
        const url = $('#form-professor').data('url-cadastro');
        $('#form-professor input[name="id"]').val('');
        $('#form-professor input[name="nome"]').val('');
        $('#form-professor input[name="email"]').val('');
        $('#form-professor').attr('action', url);
    });

$('#pagina-professores table button[data-acao="editar"]')
    .on('click', (event) => {
        const botaoEditar = $(event.target);
        const id = botaoEditar.closest('tr').data('id');
        const url = `${$('#form-professor').data('url-edicao').replace('id', id)}?_method=PUT`;

        $("#form-professor").attr('action', url);
        $('#form-professor input[name="id"]').val(id);
        $('#form-professor input[name="nome"]').val(
            $(`table tr[data-id="${id}"] td *[data-nome]`).data('nome')
        );
        $('#form-professor input[name="email"]').val(
            $(`table tr[data-id="${id}"] td *[data-email]`).data('email')
        );
    });
