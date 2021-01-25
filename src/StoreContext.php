<?php

class StoreContext
{
    private $providers = [];

    public function addProvider(StoreInterface $storeProvider): void
    {
        $this->providers[] = $storeProvider;
    }

    public function handle(Request $request)
    {
/*        foreach($this->providers as $provider) {
            if($provider->canSaleable($request)) {
                return $provider->sale($request);
            }
        }*/
        throw new \InvalidArgumentException('Request could not be processed.');
    }
}