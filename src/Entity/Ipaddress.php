<?php
namespace App\Entity;

class Ipaddress
{
    protected $ipString;
    protected $count;

    public function getIpString(): string
    {
        return $this->ipString;
    }

    public function setIpString(string $ipString): void
    {
        $this->ipString = $ipString;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }
}