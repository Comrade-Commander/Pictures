<?php
$seed=time();
$num=rand(1,113);
$picpath="https://raw.githubusercontent.com/Comrade-Commander/pictures/main/got/".$num."jpg";
die(header("Location: $picpath"));
?>
