$(".bt-editar").on("click", function () {
    $.ajax({
      url: "<?= base_url('clientes/get-dados') ?>" + "/" + $(this).data("id"),
      type: "get",
      beforeSend: function () {},
    })
      .done(function (response) {
          $("#editarModal #exampleInputName1").val(response[0].nome);
          $("#editarModal #exampleInputEmail1").val(response[0].email);
          $("#editarModal #selectEmpresas").val(response[0].fk_empresas);
          $("#editarModal #exampleInputId").val(response[0].id);
          $("#editarModal #exampleCheckbox").prop("checked", response[0].ativo == 'S' ? true : false);
      })
      .fail(function (jqXHR, textStatus, msg) {
        alert(msg);
      });
    $("#editarModal").modal("show");
  });
  
  $(".bt-excluir").on("click", function () {
    $.ajax({
      url: "<?= base_url('clientes/remover') ?>" + "/" + $(this).data("id"),
      type: "delete",
      beforeSend: function () {},
    })
      .fail(function (jqXHR, textStatus, msg) {
        alert(msg);
      });
    
  });