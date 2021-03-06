<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LignePanier
 *
 * @ORM\Table(name="ligne_panier", indexes={@ORM\Index(name="commande", columns={"id_commande"}), @ORM\Index(name="panier", columns={"id_panier"})})
 * @ORM\Entity
 */
class LignePanier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="id_panier", type="integer", nullable=false)
     */
    private $idPanier;

    /**
     * @var int
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=false)
     */
    private $idCommande;


}
