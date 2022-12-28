<?php
namespace entities;

use \DateTime;
use entities\Account as Account;

class Transaction
{
    /** Transaction constants */
    const DEPOSIT = 1;
    const TRANSFER = 2;
    const WITHDRAWALS = 3;

    /** @var int */
    protected $id;
    
    /** @var Account */
    protected $trans_account;

    /** @var Account */
    protected $account;    

    /** @var float */
    protected $amount;

    /** @var int */
    protected $type;

    /** @var string */
	protected $comment;

    /** @var \DateTime */
	protected $duedate;

    /** @var int */
	protected $transactionRef;


    /** @var boolean */
	protected $executed;

    public function getId() :int
    {
        return $this->id;
    }

    public function setId(int $id) :Transaction
    {
        $this->id = $id;
        return $this;
    }

    public function getTransAccount() :Account
    {
        return $this->trans_account;
    }

    /**
     * @param Account $account
     * @return Transaction
     */
    public function setTransAccount($account) :Transaction
    {
        $this->trans_account = $account;
        return $this;
    }

    public function getAccount() :Account
    {
        return $this->account;
    }

    /**
     * @param Account $account
     * @return Transaction
     */
    public function setAccount($account) :Transaction
    {
        $this->account = $account;
        return $this;
    }

    public function getAmount() :float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return Transaction
     */
    public function setAmount(float $amount) :Transaction
    {
        $this->amount = $amount;
        return $this;
    }

    public function getType() :int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Transaction
     */
    public function setType($type) :Transaction
    {
        $this->type = $type;
        return $this;
    }

    public function getComment() :string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return Transaction
     */
    public function setComment($comment) :Transaction
    {
        $this->comment = $comment;
        return $this;
    }

    public function getDuedate() :DateTime
    {
        return $this->duedate;
    }

    /**
     * @param \DateTime $dueDate
     * @return Transaction
     */
    public function setDuedate($dueDate) :Transaction
    {
        $this->duedate = $dueDate;
        return $this;
    }

    public function getTransactionId() :int
    {
        return $this->transactionRef;
    }

    /**
     * @param int $transactionRef
     * @return Transaction
     */
    public function setTransactionId($transactionRef) :Transaction
    {
        $this->transactionRef = $transactionRef;
        return $this;
    }
}