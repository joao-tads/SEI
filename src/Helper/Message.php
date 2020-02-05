<?php


namespace Ifnc\Tads\Helper;


class Message
{
    public $content;
    public $context;

    public function __construct($content,$context)
    {
        $this->content = $content;
        $this->context = $context;
    }
}