<?php
$emailCookie = $_COOKIE['lembrar_email'] ?? '';
?>
<form action=\"processa_login.php\" method=\"POST\">
    <input type=\"email\" name=\"email\" placeholder=\"Email\" value=\"<?= $emailCookie ?>\" required>
    <input type=\"password\" name=\"senha\" placeholder=\"Senha\" required>
    <label><input type=\"checkbox\" name=\"lembrar\" <?= $emailCookie ? 'checked' : '' ?>> Lembrar e-mail</label>
    <button type=\"submit\">Entrar</button>
</form>