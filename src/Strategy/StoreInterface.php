<?php
interface StoreInterface
{
    public function save(string $ipAddress);
    public function getCount(string $ipAddress);
}