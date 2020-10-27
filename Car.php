<?php

require_once "Vehicle.php";

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var boolean
     */
    private $hasParkBrake = false;

    /**
     * @var boolean
     */
    private $start = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake() {
        if ($this->hasParkBrake === false) {
            $hasParkBrake = true;
        } else {
            $hasParkBrake = false;
        }
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start() {
        if ($this->hasParkBrake === true) {
            throw new Exception ("ATTENTION !!! Frein à main enclenché");
        }
        if ($this->start === false) {
            $start = true;
        }
        $this->start = $start;
    }
}