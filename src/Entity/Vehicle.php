<?php

namespace App\Entity;

use App\Repository\VehicleRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity(repositoryClass: VehicleRepository::class)]
class Vehicle
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\Column(type: 'uuid', unique: true)]
    #[ORM\CustomIdGenerator(UuidGenerator::class)]
    private Uuid $id;

    #[ORM\Column(length: 255)]
    private ?string $manufacturer = null;

    #[ORM\Column(length: 255)]
    private ?string $model = null;

    #[ORM\Column(length: 255)]
    private ?string $vin = null;

    #[ORM\Column(length: 255)]
    private ?string $engineType = null;

    #[ORM\Column(length: 255)]
    private ?string $transmission = null;

    #[ORM\Column]
    private ?int $doors = null;

    #[ORM\Column]
    private ?int $seats = null;

    #[ORM\Column(length: 255)]
    private ?string $driveType = null;

    #[ORM\Column]
    private ?int $horsePower = null;

    #[ORM\Column(length: 255)]
    private ?string $color = null;

    #[ORM\Column(length: 255)]
    private ?string $fuelType = null;

    #[ORM\Column]
    private ?DateTimeImmutable $createdAt = null;

    public function __construct(
        null|string $manufacturer = null,
        null|string $model = null,
        null|string $vin = null,
        null|string $engineType = null,
        null|string $transmission = null,
        null|int $doors = null,
        null|int $seats = null,
        null|string $driveType = null,
        null|int $horsePower = null,
        null|string $color = null,
        null|string $fuelType = null
    ) {
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->vin = $vin;
        $this->engineType = $engineType;
        $this->transmission = $transmission;
        $this->doors = $doors;
        $this->seats = $seats;
        $this->driveType = $driveType;
        $this->horsePower = $horsePower;
        $this->color = $color;
        $this->fuelType = $fuelType;
        $this->createdAt = new DateTimeImmutable();
    }

    public function getId(): null|Uuid
    {
        return $this->id;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(string $manufacturer): static
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(string $vin): static
    {
        $this->vin = $vin;

        return $this;
    }

    public function getEngineType(): ?string
    {
        return $this->engineType;
    }

    public function setEngineType(string $engineType): static
    {
        $this->engineType = $engineType;

        return $this;
    }

    public function getTransmission(): ?string
    {
        return $this->transmission;
    }

    public function setTransmission(string $transmission): static
    {
        $this->transmission = $transmission;

        return $this;
    }

    public function getDoors(): ?int
    {
        return $this->doors;
    }

    public function setDoors(int $doors): static
    {
        $this->doors = $doors;

        return $this;
    }

    public function getSeats(): ?int
    {
        return $this->seats;
    }

    public function setSeats(int $seats): static
    {
        $this->seats = $seats;

        return $this;
    }

    public function getDriveType(): ?string
    {
        return $this->driveType;
    }

    public function setDriveType(string $driveType): static
    {
        $this->driveType = $driveType;

        return $this;
    }

    public function getHorsePower(): ?int
    {
        return $this->horsePower;
    }

    public function setHorsePower(int $horsePower): static
    {
        $this->horsePower = $horsePower;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getFuelType(): ?string
    {
        return $this->fuelType;
    }

    public function setFuelType(string $fuelType): static
    {
        $this->fuelType = $fuelType;

        return $this;
    }

    public function getCreatedAt(): ?DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
