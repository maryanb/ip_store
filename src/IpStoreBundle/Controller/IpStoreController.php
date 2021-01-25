<?php
namespace App\IpStoreBundle\Controller;

use App\IpStoreBundle\Context;
use Symfony\Component\HttpFoundation\Response;

class IpStoreController
{
    private $context;

    /* *
     * @Route("/ipstore/addtostore", name="ip_store_addpage", methods={"GET"})
     * 
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function addAction()
    {
        return new Response('It works', 200, array('Content-Type' => 'text/plain'));
/*        return new Response(
            $this->context->handle('hello') . PHP_EOL . $this->context->handle('hello world'),
            200,
            array('Content-Type' => 'text/plain')
        );*/
    }
}