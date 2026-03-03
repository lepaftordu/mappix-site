<?php
$page = $_GET['page'] ?? 'home';
$title = strtoupper($page);

include __DIR__ . '/includes/header.php';

$allowed = ['home', 'contact'];

if (in_array($page, $allowed)) {
    $file = __DIR__ . '/pages/' . $page . '.php';
} else {
    $file = null;
}

if ($file && file_exists($file)) {
    include($file);
} else {
    echo "Page introuvable";
}

include __DIR__ . '/includes/footer.php';