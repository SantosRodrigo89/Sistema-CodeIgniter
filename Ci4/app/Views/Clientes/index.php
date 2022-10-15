<!-- CSS Files -->
<link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

<div class="d-flex justify-content-center">
    <div>
        <h1>Clientes</h1>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adicionarModal">Adicionar</button>
            <a href="/" type="button" class="btn btn-secondary">Home</a>
        </div>
    </div>
</div>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>ATIVO</th>
        <th>EMPRESA</th>

    </thead>

    <tbody>
        <?php foreach ($Clientes as $cliente) : ?>
            <tr>
                <td><?= $cliente["id"] ?></td>
                <td><?= $cliente["nome"] ?></td>
                <td><?= $cliente["email"] ?></td>
                <td><?= $cliente["ativo"] ?></td>
                <td><?= $cliente["razao_social"] ?></td>
                <td><button class="bt-editar btn btn-warning" data-id="<?= $cliente["id"] ?>">Editar</button></td>
                <td>
                    <form action="<?= base_url("clientes/remover") ?>" method="POST">
                        <input type="hidden" name="clienteid" value=<?= $cliente["id"] ?>>
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>