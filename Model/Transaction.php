<?php

namespace Smichaelsen\SaasBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Payum\Core\Model\Payment;

abstract class Transaction extends Payment
{

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }
}
