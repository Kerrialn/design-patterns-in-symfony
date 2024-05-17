<?php

namespace App\Controller;

use App\Service\VehicleBuilder\Builder\JaguarBuilder;
use App\Service\VehicleBuilder\Builder\LandRoverBuilder;
use App\Service\VehicleBuilder\Contract\VehicleBuilderInterface;
use App\Service\VehicleBuilder\Director\VehicleDirector;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VehicleController extends AbstractController
{


    public function __construct(
        #[Autowire(service: LandRoverBuilder::class)]
        private readonly VehicleBuilderInterface $landRoverBuilder,
         #[Autowire(service: JaguarBuilder::class)]
         private readonly VehicleBuilderInterface $jaguarBuilder
    )
    {
    }

    #[Route(path: '/vehicle', name: 'vehicle')]
    public function builderDesignPattern() : Response {
        $vehicleDirector = new VehicleDirector();
        $landRover = $vehicleDirector->makeLandRover($this->landRoverBuilder);
        $jaguar = $vehicleDirector->makeJaguarFtypeR75Coupe($this->jaguarBuilder);
        dd($landRover, $jaguar);
    }

}