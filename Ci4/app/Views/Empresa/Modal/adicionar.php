<!-- Modal Adicionar -->
<div class="modal fade" id="adicionarModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="adicionarModalLabel2">Adicionar Empresa</h1>
               <!--  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <form action="<?= base_url("empresas/adicionar") ?>" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Razão social</label>
                        <input type="string" class="form-control" name="razao_social" id="exampleInputName1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">CNPJ</label>
                        <input type="text" class="form-control" name="cpfcnpj" id="exampleInputName1">
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button> -->
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>