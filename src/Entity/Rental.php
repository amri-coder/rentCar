<?php

namespace App\Entity;

use App\Repository\RentalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RentalRepository::class)
 */
class Rental
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $carRentalDate;

    /**
     * @ORM\Column(type="date")
     */
    private $carRentalReturnDate;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity=Cars::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $car;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCarRentalDate(): ?\DateTimeInterface
    {
        return $this->carRentalDate;
    }

    public function setCarRentalDate(\DateTimeInterface $carRentalDate): self
    {
        $this->carRentalDate = $carRentalDate;

        return $this;
    }

    public function getCarRentalReturnDate(): ?\DateTimeInterface
    {
        return $this->carRentalReturnDate;
    }

    public function setCarRentalReturnDate(\DateTimeInterface $carRentalReturnDate): self
    {
        $this->carRentalReturnDate = $carRentalReturnDate;

        return $this;
    }

    public function getUsers(): ?User
    {
        return $this->users;
    }

    public function setUsers(?User $users): self
    {
        $this->users = $users;

        return $this;
    }

    public function getCar(): ?Cars
    {
        return $this->car;
    }

    public function setCar(?Cars $car): self
    {
        $this->car = $car;

        return $this;
    }
}
