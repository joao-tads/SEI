<?php
namespace Ifnc\Tads\Helper;
use Ifnc\Tads\Helper\Message;
trait Flash
{
    function create(Message $message)
    {
        if(isset($_SESSION["msg"])){
            $_SESSION["msg"][] = $message;
        }else{
            $_SESSION["msg"] = array();
            $_SESSION["msg"][] = $message;
        }
    }

    function useAll(){
        $messages = [];
        if(isset($_SESSION["msg"])){
            foreach ($_SESSION["msg"] as $key => $item){
                $messages[] = $item;
                unset($_SESSION["msg"][$key]);
            }
        }

        return $messages;
    }

    function showAll(){

        $messages = Flash::useAll();
        foreach ($messages as $key => $valor){
            echo '<div class="row- alert sticky-top '.$valor->context.' alert-dismissible fade show"role="alert">';
            echo $valor->content;
            echo '<button type="button" class="close m-auto" data-dismiss="alert" aria-label="Close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
            echo '</div>';
        }
    }

}