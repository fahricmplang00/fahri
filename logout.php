<?php
require_once 'config.php';

mulai_sesi();

$_SESSION = [];

$param = session_get_cookie_params();
setcookie(session_name(), '', time() - 42000, $param['path'], $param['domain'], $param['secure'], $param['httponly']);

session_destroy();

header('Location: login.php');
exit;
