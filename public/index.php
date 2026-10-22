<?php
$envFile = __DIR__ . '/../.env';
$env = file_exists($envFile) ? parse_ini_file($envFile) : [];
$app = $env['APP_NAME'] ?? '(APP_NAME belum diisi)';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mini Deploy</title>
</head>

<body>
    <h1>Halo dari <?= htmlspecialchars($app) ?></h1>
    <p>Versi aplikasi: v2</p>
    <p>Versi PHP: <?= PHP_VERSION ?></p>
    <p>Waktu server: <?= date('d-m-Y H:i:s') ?></p>
</body>

</html>