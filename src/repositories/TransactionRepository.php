<?php

namespace repositories;
use entities\Transaction;

class TransactionRepository
{
    /**
    * @return array<Transaction> $transactions
    */
    public function getAllTransactions(string $sortBy = null, string $sortOrder = 'asc') : array
    {
        /** DB Query */
        /**
         * select * from Transaction ;
         */
        return [];
    }
}