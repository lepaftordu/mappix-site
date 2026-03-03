<?php
$page = $_GET['page'] ?? 'home';
$title = strtoupper($page);

include __DIR__ . '/includes/header.php';

$allowed = ['home', 'contact'];

$file = __DIR__ . '/page/home.php';

if (file_exists($file)) {
    include($file);
} else {
    echo "Page introuvable";
}

include __DIR__. '/includes/footer.php';