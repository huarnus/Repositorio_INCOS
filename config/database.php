<?php
return [
    'port' => (int)(getenv('DB_PORT') ?: 3306),
    'host' => getenv('DB_HOST') ?: 'localhost',
    'user' => getenv('DB_USER') ?: 'root',
    'password' => getenv('DB_PASSWORD') !== false ? getenv('DB_PASSWORD') : '',
    'database' => getenv('DB_DATABASE') ?: 'repositorio',
];
