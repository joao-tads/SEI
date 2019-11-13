<?php


namespace Ifnc\Tads\Helper;


class Message
{
    public $title;
    public $content;
    public $context;
    public function __construct($title,$content,$context)
    {
        $this->title = $title;
        $this->content = $content;
        $this->context = $context;
    }
}