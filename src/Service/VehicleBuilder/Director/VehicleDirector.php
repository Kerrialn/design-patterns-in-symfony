<?php

namespace App\Service\VehicleBuilder\Director;

use App\Entity\Vehicle;
use App\Service\VehicleBuilder\Contract\VehicleBuilderInterface;

final class VehicleDirector
{
    public function makeLandRover(VehicleBuilderInterface $vehicleBuilder): Vehicle
    {
        $vehicleBuilder->reset();
        $vehicleBuilder->setManufacturer('Land Rover');
        $vehicleBuilder->setModel('Defender');
        $vehicleBuilder->setVin('8237AM-31KAH8381-3R428123');
        $vehicleBuilder->setEngineType('v12');
        $vehicleBuilder->setTransmission('manual');
        $vehicleBuilder->setDoors(6);
        $vehicleBuilder->setSeats(6);
        $vehicleBuilder->setDriveType('4x4');
        $vehicleBuilder->setHorsePower(200);
        $vehicleBuilder->setColor('Black');
        $vehicleBuilder->setFuelType('petrol');
        return $vehicleBuilder->getObject();
    }

    public function makeJaguarFtypeR75Coupe(VehicleBuilderInterface $vehicleBuilder): Vehicle
    {
        $vehicleBuilder->reset();
        $vehicleBuilder->setManufacturer('Jaguar');
        $vehicleBuilder->setModel('F-type R75');
        $vehicleBuilder->setVin('JAG13297-2978KFDEWI-32149UDA');
        $vehicleBuilder->setEngineType('v8');
        $vehicleBuilder->setTransmission('manual');
        $vehicleBuilder->setDoors(4);
        $vehicleBuilder->setSeats(4);
        $vehicleBuilder->setDriveType('rear wheel');
        $vehicleBuilder->setHorsePower(150);
        $vehicleBuilder->setColor('Green');
        $vehicleBuilder->setFuelType('petrol');
        return $vehicleBuilder->getObject();
    }
}
