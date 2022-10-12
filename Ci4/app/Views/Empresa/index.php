<div class="d-flex justify-content-center">
    <div>
        <h2 class="text-center"><?= $titulo ?></h2>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adicionarModal">Adicionar</button>
            <button type="button" class="btn btn-secondary">Home</button>
        </div>
    </div>
</div>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>UF</th>
    </thead>

    <tbody>
        <?php foreach ($empresas as $empresa) : ?>
            <tr>
                <td><?= $empresa["id"] ?></td>
                <td><?= $empresa["nome"] ?></td>
                <td><?= $empresa["uf"] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>