<!DOCTYPE html>
<html>
<head>
    <title>Reservas</title>
</head>
<body>
    <h1>Lista de Reservas</h1>

    <?php if (!empty($reservas)): ?>
        <ul>
            <?php foreach ($reservas as $reserva): ?>
                <li><?= esc($reserva['data']) ?> - <?= esc($reserva['descricao']) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhuma reserva cadastrada.</p>
    <?php endif; ?>
</body>
</html>
