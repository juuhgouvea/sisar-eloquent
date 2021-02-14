$('#pagina-disciplinas #js-cadastrar')
    .on('click', (event) => {
        const url = $('#form-disciplina').data('url-cadastro');
        $('#form-disciplina input[name="id"]').val('');
        $('#form-disciplina input[name="nome"]').val('');
        $('#form-disciplina select[name="curso"] option').removeAttr('selected');
        $('#form-disciplina select[name="professor"] option').removeAttr('selected');
        $('#form-disciplina select[name="curso"] option[disabled]').attr('selected', true);
        $('#form-disciplina select[name="professor"] option[disabled]').attr('selected', true);
        $('#form-disciplina').attr('action', url);
    });

$('#pagina-disciplinas table button[data-acao="editar"]')
    .on('click', (event) => {
        const botaoEditar = $(event.target);
        const id = botaoEditar.closest('tr').data('id');
        const url = `${$('#form-disciplina').data('url-edicao').replace('id', id)}?_method=PUT`;
        const cursoId = $(`table tr[data-id="${id}"] td *[data-curso]`).data('curso');
        const professorId = $(`table tr[data-id="${id}"] td *[data-professor]`).data('professor');

        $('#form-disciplina select[name="curso"] option').removeAttr('selected');
        $('#form-disciplina select[name="professor"] option').removeAttr('selected');

        $("#form-disciplina").attr('action', url);
        $('#form-disciplina input[name="id"]').val(id);
        $('#form-disciplina input[name="nome"]').val(
            $(`table tr[data-id="${id}"] td *[data-nome]`).data('nome')
        );
        $(`#form-disciplina select[name="curso"] option[value="${cursoId}"]`).attr('selected', true);
        $(`#form-disciplina select[name="professor"] option[value="${professorId}"]`).attr('selected', true);
    });
