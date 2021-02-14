$('#pagina-cursos #js-cadastrar')
  .on('click', (event) => {
    const url = $('#form-curso').data('url-cadastro');
    $('#form-curso input[name="id"]').val('');
    $('#form-curso input[name="nome"]').val('');
    $('#form-curso').attr('action', url);
  });

$('#pagina-cursos table button[data-acao="editar"]')
  .on('click', (event) => {
    const botaoEditar = $(event.target);
    const id = botaoEditar.closest('tr').data('id');
    const url = `${$('#form-curso').data('url-edicao').replace('id', id)}?_method=PUT`;

    $("#form-curso").attr('action', url);
    $('#form-curso input[name="id"]').val(id);
    $('#form-curso input[name="nome"]').val(
      $(`table tr[data-id="${id}"] td *[data-nome]`).data('nome')
    );
  });
