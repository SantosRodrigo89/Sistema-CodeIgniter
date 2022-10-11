<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI4 | Rup</title>
</head>

<body>
    <table>
        <thead>
            <th>ID</th>
            <th>cpfcnpj</th>
            <th>nome</th>
            <th>idade</th>
            <th>nascimento</th>
            <th>email</th>
            <th>ativo</th>
            <th>data criação</th>
        </thead>

        <tbody>
            <?php foreach ($Rups as $rup) : ?>
                <tr>
                    <td><?= $rup["id"] ?></td>
                    <td><?= $rup["cpfcnpj"] ?></td>
                    <td><?= $rup["nome"] ?></td>
                    <td><?= $rup["idade"] ?></td>
                    <td><?= $rup["data_nascimento"] ?></td>
                    <td><?= $rup["email"] ?></td>
                    <td><?= $rup["ativo"] ?></td>
                    <td><?= $rup["data_criacao"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>