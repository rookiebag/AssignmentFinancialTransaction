<?php

namespace services;
use entities\Account;
use \DateTime;

class TransactionService
{
    const DEPOSIT_TRANSACTION = 1;
    const TRANSFER_TRANSACTION = 2;
    const WITHDRAW_TRANSACTION = 3;

    public function commitTransaction(
        Account $accountFrom, 
        Account $accountTo, 
        int $transactionType, 
        float $amount, 
        string $comment, 
        DateTime $dueDate,
        int $refTransactionId = null): int|null
    {
        $transactionId = null;
        /**
         * Commit database transaction
         * transactionId 
         */
        /** DB transaction is true */
        if (true)
        {
            /** db return transaction id */
            $transactionId = 1;
            /**
             * Update account balance in Accounts table
             * DB query
             * Here calculation is done to consider what amount need to add and remove from the account
             */
            $accountBalance = $accountTo->getAccountBalance();
            if($transactionType == self::DEPOSIT_TRANSACTION)
            {
                $accountBalance += $amount;
            }
            if($transactionType == self::TRANSFER_TRANSACTION || ($transactionType == self::WITHDRAW_TRANSACTION))
            {
                $accountBalance -= $amount;
            }

            $accountTo->setAccountBalance($accountTo->getAccountBalance() + $amount);
            // $accountTo->update();
        }

        return $transactionId;
    }
}