<?php

namespace BackToWin\Boundary\Auth\Command;

use Chief\Command;
use BackToWin\Framework\Uuid\Uuid;

class GenerateTokenCommand implements Command
{
    /**
     * @var Uuid
     */
    private $userId;

    public function __construct(string $userId)
    {
        $this->userId = new Uuid($userId);
    }

    public function getUserId(): Uuid
    {
        return $this->userId;
    }
}
