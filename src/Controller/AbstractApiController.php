<?php
declare(strict_types=1);


namespace App\Controller;

use App\Entity\patient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



abstract class AbstractApiController extends AbstractController
{
    protected function buildForm(string $type,$data = null, array $options =[]): FormInInterface
    {

        $options = array_merge($options,[
            'crsf_protection' =>false,
        ]);
        return $this->container->get('form.factory')->createNamed('',$type,$data,$options);

    }

    protected function respond($data,int $statusCode = Response::HTTP_OK): Response
    {
        return $this->handleView($this->view($data,$statusCode));
    }

}