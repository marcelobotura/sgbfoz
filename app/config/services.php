<?php
// Aqui você pode registrar serviços reutilizáveis (opcional)
$services = [
    'db' => function () {
        return getDbConnection();
    }
];
