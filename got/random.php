<?php
$seed=time();
$num=rand(1,113);
$picpath="https://github.com/Comrade-Commander/pictures/blob/main/got/".$num."jpg";
die(header("Location: $picpath"));
?>
