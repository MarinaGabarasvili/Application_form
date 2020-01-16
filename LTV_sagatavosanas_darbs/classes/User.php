<?php

class User
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $birthDate;
    /**
     * @var string
     */
    private $image;


    /**
     * @var int|null
     */
    private $id;

    public function __construct(
        string $name,
        string $birthDate,
        string $image,
        ?int $id = null
    ) {
        $this->name = $name;
        $this->birthDate= $birthDate;
        $this->image = $image;
        $this->id = $id;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function birthDate(): string
    {
        return $this->birthDate;
    }

    public function image(): string
    {
        return $this->image;
    }

}