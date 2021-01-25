<?php
namespace App;

class CallContext
{
    private $providers  = [];

    public function addProvider(CallInterface $callProvider): void
    {
        $this->providers[] = $callProvider;
    }

    public function handle(string $providerPrefix)
    {
/*        foreach($this->providers as $provider) {
            if($provider->canSaleable($request)) {
                return $provider->sale($request);
            }
        }*/
//        throw new \InvalidArgumentException('Request could not be processed.');
    }
}