<?php
require_once 'classes/Sessao.php';
Sessao::iniciar();

$usuario = Sessao::get('usuario');
if (!$usuario) {
    header('Location: login.php');
    exit;
}

$cookieEmail = $_COOKIE['lembrar_email'] ?? '';

echo \"<h1>Bem-vindo, $usuario</h1>\";
if ($cookieEmail) echo \"<p>Email lembrado: $cookieEmail</p>\";
echo '<a href=\"logout.php\">Logout</a>';