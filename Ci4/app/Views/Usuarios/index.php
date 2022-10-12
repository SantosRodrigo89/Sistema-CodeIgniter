<div class="d-flex justify-content-center">
    <div>
        <h1>Usuários</h1>
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
        <th>SENHA</th>
        <th>ATIVO</th>

    </thead>

    <tbody>
        <?php foreach ($Usuarios as $usuario) : ?>
            <tr>
                <td><?= $usuario["id"] ?></td>
                <td><?= $usuario["nome"] ?></td>
                <td><?= $usuario["email"] ?></td>
                <td><?= $usuario["senha"] ?></td>
                <td><?= $usuario["ativo"] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>