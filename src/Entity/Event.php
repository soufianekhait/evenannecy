<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 */
class Event
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="simple_array")
     */
    private $name = [];

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $eventName;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $eventType;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $duration;

    /**
     * @ORM\Column(type="integer")
     */
    private $seats;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Association", inversedBy="organizedEvents")
     */
    private $organized;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Particular", inversedBy="organizedEvents")
     */
    private $particularEvent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?array
    {
        return $this->name;
    }

    public function setName(array $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEventName(): ?string
    {
        return $this->eventName;
    }

    public function setEventName(string $eventName): self
    {
        $this->eventName = $eventName;

        return $this;
    }

    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    public function setEventType(string $eventType): self
    {
        $this->eventType = $eventType;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getSeats(): ?int
    {
        return $this->seats;
    }

    public function setSeats(int $seats): self
    {
        $this->seats = $seats;

        return $this;
    }

    public function getOrganized(): ?Association
    {
        return $this->organized;
    }

    public function setOrganized(?Association $organized): self
    {
        $this->organized = $organized;

        return $this;
    }

    public function getParticularEvent(): ?Particular
    {
        return $this->particularEvent;
    }

    public function setParticularEvent(?Particular $particularEvent): self
    {
        $this->particularEvent = $particularEvent;

        return $this;
    }
}
