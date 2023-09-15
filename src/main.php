<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Usuario;

$u = new Usuario("Inacio");

echo "<h2>App of Today</h2>";
echo $u -> getNome();
