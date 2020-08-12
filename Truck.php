<?php
require_once "Vehicle.php";

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        "fuel",
        "electric",
    ];

    /**
     * @var int
     */
    private $storageCapacity;

    /**
     * @var int
     */
    private $loading = 0;

    public function __construct(string $color, int $nbSeats, int $storageCapacity, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->storageCapacity = $storageCapacity;
        $this->setEnergy($energy);
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     * @return $this|Truck
     */
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }

    /**
     * @param int $storageCapacity
     */
    public function setStorageCapacity($storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @return int
     */
    public function getLoading()
    {
        return $this->loading;
    }

    /**
     * @param int $loading
     */
    public function setLoading($loading)
    {
        $this->loading = $loading;
    }

    public function isFull()
    {
        if ($this->loading >= $this->storageCapacity) {
            return "full";
        }
        return "in filling";
    }
}