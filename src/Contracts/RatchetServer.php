<?php

namespace Periloso\LaravelRatchet\Contracts;

use Ratchet\ConnectionInterface;

interface RatchetServer
{
    public function onMessage(ConnectionInterface $conn, $input);
}
