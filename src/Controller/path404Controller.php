<?php


namespace Ifnc\Tads\Controller;


class path404Controller implements IController
{

    public function request(): void
    {
        http_response_code(404);
        exit();
    }
}