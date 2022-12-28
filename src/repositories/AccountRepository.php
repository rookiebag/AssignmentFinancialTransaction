<?php
namespace repositories;

use entities\Account;

class AccountRepository
{
    /**
    * @return array<Account> $accounts
    */
    public function getAllAccounts() :array
    {
        /** DB Query */
        /**
         * select * from accounts;
         */
        return array();
    }

    public function getAccountBalance(Account $account) : float
    {
        /** DB Query */
        /**
         * select account_balance from accounts where id = $account->id;
         */
        return 0.00;
    }
}