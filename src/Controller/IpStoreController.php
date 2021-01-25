<?php
namespace App\Controller;

use App\Form\Type\IpaddressType;

use App\Entity\Ipaddress;
//use App\Form\Type\IpaddressType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\CallContext;

class IpStoreController
{
    private $callContext;

    public function __construct(CallContext $callContext)
    {
        $this->callContext = $callContext;
    }

    public function addAction()
    {$this->callContext->handle('Web');
        return new Response('It works', 200, array('Content-Type' => 'text/plain'));
/*        return new Response(
            $this->context->handle('hello') . PHP_EOL . $this->context->handle('hello world'),
            200,
            array('Content-Type' => 'text/plain')
        );*/
    }
}
/*
class IpstoreController extends AbstractController
{
    public function addToStore(): Response
    {
        $ipAddress = new Ipaddress();

        $form = $this->createForm(IpaddressType::class, $ipAddress);

        return $this->render('ipaddress/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}*/