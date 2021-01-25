<?php
namespace App\IpStoreBundle;

class Context
{
    private $callProviders  = [];
    private $storeProviders = [];

    public function addCallProvider(CallInterface $callProvider): void
    {
        $this->callProviders[] = $callProvider;
    }

    public function addStoreProvider(StoreInterface $storeProvider): void
    {
        $this->storeProviders[] = $storeProvider;
    }

    public function handleAdd(Request $request)
    {
        foreach($this->providers as $provider) {
            if($provider->canSaleable($request)) {
                return $provider->sale($request);
            }
        }
        throw new \InvalidArgumentException('Request could not be processed.');
    }
}