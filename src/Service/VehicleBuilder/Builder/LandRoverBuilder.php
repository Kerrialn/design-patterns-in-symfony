<?php

namespace App\Service\VehicleBuilder\Builder;

use App\Entity\Vehicle;
use App\Service\VehicleBuilder\Contract\VehicleBuilderInterface;

final class LandRoverBuilder implements VehicleBuilderInterface
{
    private Vehicle $vehicle;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->vehicle = new Vehicle();
    }

    public function getObject(): Vehicle
    {
        $vehicle = $this->vehicle;
        $this->reset();
        return $vehicle;
    }

    public function setManufacturer(string $manufacturer): void
    {
        $this->vehicle->setManufacturer($manufacturer);
    }

    public function setModel(string $model): void
    {
        $this->vehicle->setModel($model);
    }

    public function setVin(string $vin): void
    {
        $this->vehicle->setVin($vin);
    }

    public function setEngineType(string $engineType): void
    {
        $this->vehicle->setEngineType($engineType);
    }

    public function setTransmission(string $transmission): void
    {
        $this->vehicle->setTransmission($transmission);
    }

    public function setDoors(int $doors): void
    {
        $this->vehicle->setDoors($doors);
    }

    public function setSeats(int $seats): void
    {
        $this->vehicle->setSeats($seats);
    }

    public function setDriveType(string $driveType): void
    {
        $this->vehicle->setDriveType($driveType);
    }

    public function setHorsePower(int $horsePower): void
    {
        $this->vehicle->setHorsePower($horsePower);
    }

    public function setColor(string $color): void
    {
        $this->vehicle->setColor($color);
    }

    public function setFuelType(string $fuelType): void
    {
        $this->vehicle->setFuelType($fuelType);
    }
}
