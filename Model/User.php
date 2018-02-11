<?php
namespace Smichaelsen\SaasBundle\Model;

abstract class User extends \FOS\UserBundle\Model\User
{

    /**
     * @var int
     */
    protected $clearedBalance;

    /**
     * @var \DateTime
     */
    protected $clearedBalanceDate;
}
