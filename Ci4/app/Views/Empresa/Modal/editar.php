<!-- Modal Adicionar -->
<div class="modal" id="editarModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="adicionarModalLabel">Editar Empresa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url("empresas/editar") ?>" method="POST">
                <input type="hidden" name="id" id="exampleInputId" />
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Nome</label>
                        <input type="string" class="form-control" name="razao_social" id="exampleInputName1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Cnpj</label>
                        <input type="text" class="form-control" name="cpfcnpj" id="exampleInputText1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAtivo1" class="form-label">Ativo</label>
                        <input type="checkbox" name="ativo" id="exampleCheckbox">
                        </input>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>