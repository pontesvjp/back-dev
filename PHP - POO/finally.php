<?php

function a(): int
{
    try {
        echo "codigo";
        return 0;
    } catch (Throwable $e) {
        echo "problema";
        return 1;
    } finally {
        echo "final da função";
    }
}

echo a();