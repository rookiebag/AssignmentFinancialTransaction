<?php

namespace entities;

use phpDocumentor\Reflection\Types\Boolean;

class Account
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /** @var bool */
    protected $active;
    
    /** @var float */
    protected $account_balance;

    public function getId() :int
    {
        return $this->id;
    }

    public function setId(int $id) :Account
    {
        $this->id = $id;
        return $this;
    }

    public function getName() :string
    {
        return $this->name;
    }

    public function setName(string $name) :Account
    {
        $this->name = $name;
        return $this;
    }

    public function getActive() :bool
    {
        return $this->active;
    }

    public function setActive(bool $active) :Account
    {
        $this->active = $active;
        return $this;
    }

    public function getAccountBalance() :float
    {
        return $this->account_balance;
    }

    public function setAccountBalance(float $amount) :Account
    {
        $this->account_balance = $amount;
        return $this;
    }
}