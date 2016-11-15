<?php

namespace AppBundle\Entity;

/**
 * Produit_dans_panier
 */
class Produit_dans_panier
{
    /**
     * @var integer
     */
    private $qte_cmd;

    /**
     * @var \AppBundle\Entity\panier
     */
    private $numpanier;

    /**
     * @var \AppBundle\Entity\produit
     */
    private $numproduit;


    /**
     * Set qteCmd
     *
     * @param integer $qteCmd
     *
     * @return Produit_dans_panier
     */
    public function setQteCmd($qteCmd)
    {
        $this->qte_cmd = $qteCmd;

        return $this;
    }

    /**
     * Get qteCmd
     *
     * @return integer
     */
    public function getQteCmd()
    {
        return $this->qte_cmd;
    }

    /**
     * Set numpanier
     *
     * @param \AppBundle\Entity\panier $numpanier
     *
     * @return Produit_dans_panier
     */
    public function setNumpanier(\AppBundle\Entity\panier $numpanier)
    {
        $this->numpanier = $numpanier;

        return $this;
    }

    /**
     * Get numpanier
     *
     * @return \AppBundle\Entity\panier
     */
    public function getNumpanier()
    {
        return $this->numpanier;
    }

    /**
     * Set numproduit
     *
     * @param \AppBundle\Entity\produit $numproduit
     *
     * @return Produit_dans_panier
     */
    public function setNumproduit(\AppBundle\Entity\produit $numproduit)
    {
        $this->numproduit = $numproduit;

        return $this;
    }

    /**
     * Get numproduit
     *
     * @return \AppBundle\Entity\produit
     */
    public function getNumproduit()
    {
        return $this->numproduit;
    }
}
