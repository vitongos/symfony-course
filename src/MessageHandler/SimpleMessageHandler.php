<?php

namespace App\MessageHandler;

use App\Message\SimpleMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SimpleMessageHandler implements MessageHandlerInterface
{
    public function __invoke(SimpleMessage $message)
    {
        echo $message->getText(), PHP_EOL;
    }
}
