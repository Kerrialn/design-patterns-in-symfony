<?php

namespace App\Entity;

use App\Repository\ManualRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity(repositoryClass: ManualRepository::class)]
class Manual
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\Column(type: 'uuid', unique: true)]
    #[ORM\CustomIdGenerator(UuidGenerator::class)]
    private Uuid $id;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    #[ORM\OneToOne(mappedBy: 'manual', cascade: ['persist', 'remove'])]
    private ?Vehicle $vehicle = null;

    /**
     * @param string|null $title
     * @param string|null $content
     */
    public function __construct(?string $title, ?string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }


    public function getId(): null|Uuid
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getVehicle(): ?Vehicle
    {
        return $this->vehicle;
    }

    public function setVehicle(?Vehicle $vehicle): static
    {
        // unset the owning side of the relation if necessary
        if ($vehicle === null && $this->vehicle !== null) {
            $this->vehicle->setManual(null);
        }

        // set the owning side of the relation if necessary
        if ($vehicle !== null && $vehicle->getManual() !== $this) {
            $vehicle->setManual($this);
        }

        $this->vehicle = $vehicle;

        return $this;
    }

}
