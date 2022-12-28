<?php

namespace interfaces;

use \DateTime;
use entities\Account;

interface AccountTransaction 
{
    const DEPOSIT_TRANSACTION = 1;
    const TRANSFER_TRANSACTION = 2;
    const WITHDRAW_TRANSACTION = 3;

    public function doTransaction(Account $accountFrom, Account $accountTo, int $transactionType, float $amount, string $comment, \DateTime $dueDate) :bool|null;
}