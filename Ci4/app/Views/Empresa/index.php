<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI4 | Empresas</title>
</head>

<body>
    <table>
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
</body>

</html>