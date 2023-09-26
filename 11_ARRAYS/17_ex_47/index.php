<?php

    $pessoas = [
        'Wesley' => 22,
        'Felipe' => 24,
        'João' => 35,
        'Maria' => 60,
    ];

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
    












