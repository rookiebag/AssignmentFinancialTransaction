<?php

namespace services;

use entities\Account;
use DateTime;
use interfaces\AccountTransaction;
use services\TransactionService as TransactionService;

class WithdrawService implements AccountTransaction
{

    /** @var TransactionService */
    private $transactionService;

    /** @var int|null */
    private $transactionRef;

    public function __construct(TransactionService $transactionService, int|null $transactionRef = null)
    {
        $this->transactionService = $transactionService;
        $this->transactionRef = $transactionRef;
    }

    public function doTransaction(Account $accountFrom, Account $accountTo, int $transactionType, float $amount, string $comment, DateTime $dueDate) :bool
    {
        $this->transactionService->commitTransaction(
            $accountFrom, 
            $accountTo, 
            AccountTransaction::WITHDRAW_TRANSACTION, 
            $amount, $comment, $dueDate, $this->transactionRef);
        
        return true;
    }
}