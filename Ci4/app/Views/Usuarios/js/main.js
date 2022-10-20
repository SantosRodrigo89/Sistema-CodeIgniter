$(".bt-editar").on("click", function () {
  $.ajax({
    url: "<?= base_url('usuarios/get-dados') ?>" + "/" + $(this).data("id"),
    type: "get",
    beforeSend: function () {},
  })
    .done(function (response) {
      $("#editarModal #exampleInputId").val(response[0].id);
      $("#editarModal #InputName").val(response[0].nome);
      $("#editarModal #InputEmail").val(response[0].email);
      $("#editarModal #selectEmpresas").val(response[0].razao_social);
      $("#editarModal #InputSenha").val(response[0].senha);
      $("#editarModal #exampleCheckbox").prop("checked", response[0].ativo == 'S' ? true : false);
    })
    .fail(function (jqXHR, textStatus, msg) {
      alert(msg);
    });
  $("#editarModal2").modal("show");
});

$(".bt-excluir").on("click", function () {
  $.ajax({
    url: "<?= base_url('usuarios/remover') ?>" + "/" + $(this).data("id"),
    type: "delete",
    beforeSend: function () {},
  }).fail(function (jqXHR, textStatus, msg) {
    alert(msg);
  });
});

$("#bt-adicionar").on("click", function () {
  $("#adicionarModal").modal("show");
});
