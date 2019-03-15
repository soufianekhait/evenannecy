<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TheaterRepository")
 * @ORM\Table(name="theater")
 */
class Theater
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
    private $theaterName;

    /**
     * @ORM\Column(type="integer")
     */
    private $capacity;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Association", mappedBy="book")
     */
    private $bookedAssociations;

    public function __construct()
    {
        $this->bookedAssociations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTheaterName(): ?string
    {
        return $this->theaterName;
    }

    public function setTheaterName(string $theaterName): self
    {
        $this->theaterName = $theaterName;

        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * @return Collection|Association[]
     */
    public function getBookedAssociations(): Collection
    {
        return $this->bookedAssociations;
    }

    public function addBookedAssociation(Association $bookedAssociation): self
    {
        if (!$this->bookedAssociations->contains($bookedAssociation)) {
            $this->bookedAssociations[] = $bookedAssociation;
            $bookedAssociation->setBook($this);
        }

        return $this;
    }

    public function removeBookedAssociation(Association $bookedAssociation): self
    {
        if ($this->bookedAssociations->contains($bookedAssociation)) {
            $this->bookedAssociations->removeElement($bookedAssociation);
            // set the owning side to null (unless already changed)
            if ($bookedAssociation->getBook() === $this) {
                $bookedAssociation->setBook(null);
            }
        }

        return $this;
    }
}
