$('#pagina-alunos #js-cadastrar')
    .on('click', (event) => {
        const url = $('#form-aluno').data('url-cadastro');
        $('#form-aluno input[name="id"]').val('');
        $('#form-aluno input[name="nome"]').val('');
        $('#form-aluno input[name="email"]').val('');
        $('#form-aluno select[name="curso"] option').removeAttr('selected');
        $('#form-aluno select[name="curso"] option[disabled]').attr('selected', true);
        $('#form-aluno').attr('action', url);
    });

$('#pagina-alunos table button[data-acao="editar"]')
    .on('click', (event) => {
        const botaoEditar = $(event.target);
        const id = botaoEditar.closest('tr').data('id');
        const url = `${$('#form-aluno').data('url-edicao').replace('id', id)}?_method=PUT`;
        const cursoId = $(`table tr[data-id="${id}"] td *[data-curso]`).data('curso');

        $('#form-aluno select[name="curso"] option').removeAttr('selected');

        $("#form-aluno").attr('action', url);
        $('#form-aluno input[name="id"]').val(id);
        $('#form-aluno input[name="nome"]').val(
            $(`table tr[data-id="${id}"] td *[data-nome]`).data('nome')
        );
        $('#form-aluno input[name="email"]').val(
            $(`table tr[data-id="${id}"] td *[data-email]`).data('email')
        );
        $(`#form-aluno select[name="curso"] option[value="${cursoId}"]`).attr('selected', true);
    });
