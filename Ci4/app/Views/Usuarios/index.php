<!-- CSS Files -->
<link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

<div class="d-flex justify-content-center">
    <div>
        <h1>Usuários</h1>
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
        <th>EMAIL</th>
        <th>SENHA</th>
        <th>ATIVO</th>
        <th>EMPRESA</th>

    </thead>

    <tbody>
        <?php foreach ($Usuarios as $usuario) : ?>
            <tr>
                <td><?= $usuario["id"] ?></td>
                <td><?= $usuario["nome"] ?></td>
                <td><?= $usuario["email"] ?></td>
                <td><?= $usuario["senha"] ?></td>
                <td><?= $usuario["ativo"] ?></td>
                <td><?= $usuario["razao_social"]?></td>
                <td><button class="bt-editar btn btn-warning" data-id="<?= $usuario["id"] ?>">Editar</button></td>
                <td>
                    <form action="<?= base_url("usuarios/remover") ?>" method="POST">
                        <input type="hidden" name="userid" value=<?= $usuario["id"] ?>>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>