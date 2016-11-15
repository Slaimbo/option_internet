<?php

namespace AppBundle\Entity;

/**
 * Panier
 */
class Panier
{
    /**
     * @var integer
     */
    private $numpanier;

    /**
     * @var string
     */
    private $etat;


    /**
     * Get numpanier
     *
     * @return integer
     */
    public function getNumpanier()
    {
        return $this->numpanier;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Panier
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
