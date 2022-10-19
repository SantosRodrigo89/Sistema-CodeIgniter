$(".bt-editar").on("click", function () {
  $.ajax({
    url: "<?= base_url('usuarios/get-dados') ?>" + "/" + $(this).data("id"),
    type: "get",
    beforeSend: function () {},
  })
    .done(function (response) {
        $("#editarModal #exampleInputName1").val(response[0].razao_social);
        $("#editarModal #exampleInputId").val(response[0].id);
        $("#editarModal #exampleInputText1").val(response[0].cpfcnpj);
        $("#editarModal #exampleCheckbox").prop("checked", response[0].ativo == 'S' ? true : false);
    })
    .fail(function (jqXHR, textStatus, msg) {
      alert(msg);
    });
  $("#editarModal").modal("show");
});

$(".bt-excluir").on("click", function () {
  $.ajax({
    url: "<?= base_url('empresas/remover') ?>" + "/" + $(this).data("id"),
    type: "delete",
    beforeSend: function () {},
  })
    .fail(function (jqXHR, textStatus, msg) {
      alert(msg);
    });
  
});

$("#bt-adicionar").on("click", function () {
  $("#adicionarModal").modal("show");
 
  
});