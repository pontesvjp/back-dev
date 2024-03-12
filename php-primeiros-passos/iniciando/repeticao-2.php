<?php

for ($cont = 1; $cont <= 15; $cont++) {
    if ($cont == 13) {
        continue;
    }
    echo "#$cont" . PHP_EOL;
}
