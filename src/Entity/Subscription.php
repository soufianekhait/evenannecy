<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SubscriptionRepository")
 * @ORM\Table(name="subscription")
 */
class Subscription
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
    private $subscriptionName;

    /**
     * @ORM\Column(type="date")
     */
    private $dateSubscription;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $duration;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\user", mappedBy="subscription")
     */
    private $userSubscribed;

    public function __construct()
    {
        $this->userSubscribed = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubscriptionName(): ?string
    {
        return $this->subscriptionName;
    }

    public function setSubscriptionName(string $subscriptionName): self
    {
        $this->subscriptionName = $subscriptionName;

        return $this;
    }

    public function getDateSubscription(): ?\DateTimeInterface
    {
        return $this->dateSubscription;
    }

    public function setDateSubscription(\DateTimeInterface $dateSubscription): self
    {
        $this->dateSubscription = $dateSubscription;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

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

    /**
     * @return Collection|user[]
     */
    public function getUserSubscribed(): Collection
    {
        return $this->userSubscribed;
    }

    public function addUserSubscribed(user $userSubscribed): self
    {
        if (!$this->userSubscribed->contains($userSubscribed)) {
            $this->userSubscribed[] = $userSubscribed;
            $userSubscribed->setSubscription($this);
        }

        return $this;
    }

    public function removeUserSubscribed(user $userSubscribed): self
    {
        if ($this->userSubscribed->contains($userSubscribed)) {
            $this->userSubscribed->removeElement($userSubscribed);
            // set the owning side to null (unless already changed)
            if ($userSubscribed->getSubscription() === $this) {
                $userSubscribed->setSubscription(null);
            }
        }

        return $this;
    }
}
