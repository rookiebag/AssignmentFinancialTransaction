<?php

namespace services;

use entities\Account;
use \DateTime;
use interfaces\AccountTransaction;
use services\TransactionService as TransactionService;
use services\TransferService;

class DepostService implements AccountTransaction
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

    public function doTransaction(Account $accountFrom, Account $accountTo, int $transactionType, float $amount, string $comment, \DateTime $dueDate) :bool
    {
        $amountDeposited = $this->transactionService->commitTransaction($accountFrom, $accountTo, AccountTransaction::DEPOSIT_TRANSACTION, $amount, $comment, $dueDate);

        if ($amountDeposited && is_null($this->transactionRef));
        {
            $transferService = new TransferService($this->transactionService, $this->transactionRef);
            $transferService->doTransaction($accountTo, $accountFrom, AccountTransaction::TRANSFER_TRANSACTION, $amount, $comment, $dueDate);
        }
        return true;
    }
}