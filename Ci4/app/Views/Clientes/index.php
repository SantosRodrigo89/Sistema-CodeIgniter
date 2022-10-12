<div class="d-flex justify-content-center">
    <div>
    <h1>Clientes</h1>
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
        <th>EMAIL</th>

    </thead>

    <tbody>
        <?php foreach ($Clientes as $cliente) : ?>
            <tr>
                <td><?= $cliente["id"] ?></td>
                <td><?= $cliente["nome"] ?></td>
                <td><?= $cliente["email"] ?></td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>