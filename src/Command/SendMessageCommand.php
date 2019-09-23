<?php

namespace App\Command;

use App\Message\SimpleMessage;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Messenger\MessageBusInterface;

class SendMessageCommand extends Command
{
    protected static $defaultName = 'app:send-message';

    /** @var MessageBusInterface */
    private $bus;

    public function __construct(MessageBusInterface $bus)
    {
        parent::__construct();
        $this->bus = $bus;
    }

    protected function configure()
    {
        $this
            ->setDescription('Send a message through a bus')
            ->addArgument('message', InputArgument::REQUIRED, 'Message to be sent')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $text = $input->getArgument('message');

        if ($text) {
            $io->note(sprintf('You passed an argument: %s', $text));
        }

        $message = new SimpleMessage($text);
        $this->bus->dispatch($message);

        $io->success('You sent a new message! Now you can consume it...');
    }
}
