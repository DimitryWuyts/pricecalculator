<?php
declare(strict_types=1);


class User
{
    // private customer information
    private $customerId;
    private $customerGroupId;
    private $customerName;

    // constructor (parent)
    public function __construct(string $name, int $customerId,  int $customerGroupId)
    {
        $this->customerId = $customerId;
        $this->customerGroupId = $customerGroupId;
        $this->customerName = $name;

        //get
    }
    public function getId() : int
    {
        return $this->customerId;
    }
    public function getGroupId() : int
    {
        return $this->customerGroupId;
    }
    public function getName() : string
    {
        return $this->customerName;
    }

}