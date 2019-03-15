<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParticularRepository")
 * @ORM\Table(name="particular")
 */
class Particular
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
    private $firstname;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $lastname;

    /**
     * @ORM\Column(type="date")
     */
    private $birthday;

    /*
    ---Annotation
    @ORM\OneToMany(targetEntity="App\Entity\Event", mappedBy="particularEvent")
    
    private $organizedEvents;
    public function __construct()
    {
        $this->organizedEvents = new ArrayCollection();
    }*/

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    /* 
    --Annotation
    @return Collection|Event[]
    
    public function getOrganizedEvents(): Collection
    {
        return $this->organizedEvents;
    }

    public function addOrganizedEvent(Event $organizedEvent): self
    {
        if (!$this->organizedEvents->contains($organizedEvent)) {
            $this->organizedEvents[] = $organizedEvent;
            $organizedEvent->setParticularEvent($this);
        }

        return $this;
    }

    public function removeOrganizedEvent(Event $organizedEvent): self
    {
        if ($this->organizedEvents->contains($organizedEvent)) {
            $this->organizedEvents->removeElement($organizedEvent);
            // set the owning side to null (unless already changed)
            if ($organizedEvent->getParticularEvent() === $this) {
                $organizedEvent->setParticularEvent(null);
            }
        }

        return $this;
    }
    */
}
