trait Flash
{
    function create(Message $message)
    {
        $_SESSION[$message->title] = $message;
    }

    function use($title)
    {
        if(isset())
    }

    function useAll()
    {
        $messages = [];
        foreach ($_SESSION as $key => $item) {
            if(get_class($item) == Message::class) {
                $messages[] = $item;
                unset
            }
        }
    }
}