<?php

namespace AppBundle\Entity;

/**
 * Client
 */
class Client
{
    /**
     * @var integer
     */
    private $fidelite;

    /**
     * @var \AppBundle\Entity\user
     */
    private $login;


    /**
     * Set fidelite
     *
     * @param integer $fidelite
     *
     * @return Client
     */
    public function setFidelite($fidelite)
    {
        $this->fidelite = $fidelite;

        return $this;
    }

    /**
     * Get fidelite
     *
     * @return integer
     */
    public function getFidelite()
    {
        return $this->fidelite;
    }

    /**
     * Set login
     *
     * @param \AppBundle\Entity\user $login
     *
     * @return Client
     */
    public function setLogin(\AppBundle\Entity\user $login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return \AppBundle\Entity\user
     */
    public function getLogin()
    {
        return $this->login;
    }
}
