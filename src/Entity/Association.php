<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AssociationRepository")
 * @ORM\Table(name="association")
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
     * @ORM\Column(type="string", length=80)
     */
    private $nameAssociation;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $typeAssociation;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Theater", inversedBy="bookedAssociations")
     */
    private $book;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Event", mappedBy="organized")
     */
    private $organizedEvents;

    public function __construct()
    {
        $this->organizedEvents = new ArrayCollection();
    }

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
        $this->nameAssociation = $nameAssociation;

        return $this;
    }

    public function getTypeAssociation(): ?string
    {
        return $this->typeAssociation;
    }

    public function setTypeAssociation(string $typeAssociation): self
    {
        $this->typeAssociation = $typeAssociation;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getBook(): ?Theater
    {
        return $this->book;
    }

    public function setBook(?Theater $book): self
    {
        $this->book = $book;

        return $this;
    }

    /**
     * @return Collection|Event[]
     */
    public function getOrganizedEvents(): Collection
    {
        return $this->organizedEvents;
    }

    public function addOrganizedEvent(Event $organizedEvent): self
    {
        if (!$this->organizedEvents->contains($organizedEvent)) {
            $this->organizedEvents[] = $organizedEvent;
            $organizedEvent->setOrganized($this);
        }

        return $this;
    }

    public function removeOrganizedEvent(Event $organizedEvent): self
    {
        if ($this->organizedEvents->contains($organizedEvent)) {
            $this->organizedEvents->removeElement($organizedEvent);
            // set the owning side to null (unless already changed)
            if ($organizedEvent->getOrganized() === $this) {
                $organizedEvent->setOrganized(null);
            }
        }

        return $this;
    }
}
