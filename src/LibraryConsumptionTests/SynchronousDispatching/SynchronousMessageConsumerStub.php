<?php

declare(strict_types=1);

namespace EventSauce\EventSourcing\LibraryConsumptionTests\SynchronousDispatching;

use EventSauce\EventSourcing\Message;
use EventSauce\EventSourcing\MessageConsumer;

final class SynchronousMessageConsumerStub implements MessageConsumer
{
    public array $handled = [];

    public function handle(Message $message): void
    {
        $this->handled[] = $message;
    }
}
