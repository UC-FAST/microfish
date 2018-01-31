<?php
#header("Content-type: text/html; charset=utf-8");
exec("sudo python ../python/walk.py");

header("Location: walk.out");
exit;
?>
