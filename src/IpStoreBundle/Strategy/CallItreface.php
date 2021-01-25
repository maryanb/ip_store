<?php
namespace App\IpStoreBundle;
interface CallInterface
{
 public function addIp(Request $request);
 public function queryIp(Request $request);
}