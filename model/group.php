<?php
declare(strict_types=1);


class Group
{
    // private group information
    private $Id;
    private $groupName;
    private $groupDiscount;
    private $groupId;
    // constructor (parent)
    public function __construct(int $Id, string $groupName, int $groupDiscount, int $groupId)
    {
        $this->Id = $Id;
        $this->groupName = $groupName;
        $this->groupDiscount = $groupDiscount;
        $this->groupId = $groupId;

        //get
    }
    public function getId() : int
    {
        return $this->Id;
    }
    public function getGroupName() : string
    {
        return $this->groupName;
    }
    public function getDiscount() : int
    {
        return $this->groupDiscount;
    }
    public function getGroupId() : int
    {
        return $this->groupId;
    }
}