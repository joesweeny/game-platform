<?php

namespace GamePlatform\Domain\User\Persistence;

use GamePlatform\Domain\User\Entity\User;
use GamePlatform\Framework\Exception\NotFoundException;

interface Writer
{
    /**
     * Create a new by adding a new User entry into the database
     *
     * @param User $user
     * @return User
     */
    public function insert(User $user): User;

    /**
     * @param User $user
     * @throws NotFoundException
     * @return User
     */
    public function update(User $user): User;

    /**
     * Deletes a user from the database
     *
     * @param User $user
     * @return void
     */
    public function delete(User $user);
}
