<!-- Modal Adicionar -->
<div class="modal" id="editarModal" tabindex="-1" aria-labelledby="adicionarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="adicionarModalLabel">Editar Cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url("clientes/editar") ?>" method="POST">
            <input type="hidden" name="id" id="exampleInputId"/> 
            <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Nome</label>
                        <input type="string" class="form-control" name="nome" id="exampleInputName1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exaleInputSelectmp1" class="form-label">Empresa</label>
                        <select class="form-select" name="empresa" id="selectEmpresas">
                            <?php
                            foreach ($Empresas as $empresa) :
                            ?>
                                <option value="<?= $empresa["id"] ?>"> <?= $empresa["razao_social"] ?> </option>
                            <?php endforeach ?>
                        </select>
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
            </form>
        </div>
    </div>
</div>