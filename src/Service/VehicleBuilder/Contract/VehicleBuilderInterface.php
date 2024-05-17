<?php

namespace App\Service\VehicleBuilder\Contract;

use App\Entity\Vehicle;

interface VehicleBuilderInterface
{
    public function reset(): void;

    public function getObject(): Vehicle;

    public function setManufacturer(string $manufacturer): void;

    public function setModel(string $model): void;

    public function setVin(string $vin): void;

    public function setEngineType(string $engineType): void;

    public function setTransmission(string $transmission): void;

    public function setDoors(int $doors): void;

    public function setSeats(int $seats): void;

    public function setDriveType(string $driveType): void;

    public function setHorsePower(int $horsePower): void;

    public function setColor(string $color): void;

    public function setFuelType(string $fuelType): void;
}
