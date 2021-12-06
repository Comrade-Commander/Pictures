<?php
$seed = time();
$num = rand(1,113);
$picpath = "https://cdn.jsdelivr.net/gh/Comrade-Commander/pictures/main/got/".$num.".jpg";
die(header("Location: $picpath"));
?>
