<?php
require_once 'Usuario.php';

class Autenticador {
    private static $usuarios = [];

    public static function registrar(Usuario $usuario) {
        self::$usuarios[$usuario->getEmail()] = $usuario;
    }

    public static function login($email, $senha) {
        if (isset(self::$usuarios[$email])) {
            $usuario = self::$usuarios[$email];
            if ($usuario->verificarSenha($senha)) {
                return $usuario;
            }
        }
        return null;
    }

    // Simula usuários salvos para a sessão atual
    public static function seed() {
        self::registrar(new Usuario('João Teste', 'joao@teste.com', '1234'));
    }
}