<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AssociationRepository")
 */
class Association
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nameAssociation;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $typeAssociation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameAssociation(): ?string
    {
        return $this->nameAssociation;
    }

    public function setNameAssociation(string $nameAssociation): self
    {
        return $this->nameAssociation = $nameAssociation;
    }

    public function getTypeAssociation(): ?string
    {
        return $this->typeAssociation;
    }

    public function setTypeAssociation(string $typeAssociation): self
    {
        return $this->typeAssociation = $typeAssociation;
    }
}
