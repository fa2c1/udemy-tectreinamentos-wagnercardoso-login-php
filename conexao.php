<?php
define('HOST', 'localhost');
define('USUARIO', 'fernando');
define('SENHA', 'L0g4r');
define('DB', 'cadastros');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');