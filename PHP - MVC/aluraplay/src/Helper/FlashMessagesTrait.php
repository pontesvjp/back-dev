<?php

namespace Alura\Mvc\Helper;

trait FlashMessagesTrait
{
    private function addErrorMessage(string $errorMessage)
    {
        $_SESSION['error_message'] = $errorMessage;
    }
}
