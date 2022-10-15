<!-- CSS Files -->
<link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

<div class="d-flex justify-content-center">
    <div>
        <h2 class="text-center"><?= $titulo ?></h2>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary"  id="bt-adicionar">Adicionar</button>
            <a href="/" type="button" class="btn btn-secondary">Home</a>
        </div>
    </div>
</div>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>ATIVO</th>
        <th>CNPJ</th>
    </thead>

    <tbody>
        <?php foreach ($empresas as $empresa) : ?>
            <tr>
                <td><?= $empresa["id"] ?></td>
                <td><?= $empresa["razao_social"] ?></td>
                <td><?= $empresa["ativo"] ?></td>
                <td><?= $empresa["cpfcnpj"] ?></td>
                <td><button class="bt-editar btn btn-warning" data-id="<?= $empresa["id"] ?>">Editar</button></td>
                <td><button class="bt-excluir btn btn-danger" data-id="<?= $empresa["id"] ?>">Excluir</button></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>