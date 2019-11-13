<?php


namespace Ifnc\Tads\Helper;


trait Flash
{
    function create(Message $message)
    {
        $_SESSION[$message->title] = $message;
    }

    function use($title){
        if(isset($_SESSION[$title])) {
            $message = $_SESSION[$title];
            unset($_SESSION[$title]);
            return $message;
        }else{
            return NULL;
        }
    }

    function useAll(){
        $messages = [];
        foreach ($_SESSION as $key => $item){
            if(get_class($item) == Message::class){
                $messages[] = $item;
                unset($_SESSION[$key]);
            }
        }
        return $messages;
    }
}