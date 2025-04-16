<?php
require_once 'classes/Autenticador.php';
require_once 'classes/Sessao.php';

Autenticador::seed();
Sessao::iniciar();

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';
$lembrar = isset($_POST['lembrar']);

$usuario = Autenticador::login($email, $senha);

if ($usuario) {
    Sessao::set('usuario', $usuario->getNome());
    if ($lembrar) {
        setcookie('lembrar_email', $usuario->getEmail(), time() + 3600*24*30);
    }
    header('Location: dashboard.php');
} else {
    echo 'Login inválido';
}