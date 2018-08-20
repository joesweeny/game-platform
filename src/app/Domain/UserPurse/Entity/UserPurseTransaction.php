<?php

namespace GamePlatform\Domain\UserPurse\Entity;

use GamePlatform\Framework\Calculation\Calculation;
use GamePlatform\Framework\Entity\PrivateAttributesTrait;
use GamePlatform\Framework\Entity\TimestampedTrait;
use GamePlatform\Framework\Identity\IdentifiedByUuidTrait;
use GamePlatform\Framework\Uuid\Uuid;
use Money\Money;

class UserPurseTransaction
{
    use PrivateAttributesTrait,
        IdentifiedByUuidTrait,
        TimestampedTrait;

    public function setUserId(Uuid $userId): self
    {
        return $this->set('user_id', $userId);
    }

    public function getUserId(): Uuid
    {
        return $this->getOrFail('user_id');
    }

    public function setTotal(Money $money): self
    {
        return $this->set('total', $money);
    }

    public function getTotal(): Money
    {
        return $this->getOrFail('total');
    }

    public function setCalculation(Calculation $calculation): self
    {
        return $this->set('calculation', $calculation);
    }

    public function getCalculation(): Calculation
    {
        return $this->getOrFail('calculation');
    }

    public function setDescription(string $description): self
    {
        return $this->set('description', $description);
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }
}
