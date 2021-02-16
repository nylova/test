<?php


namespace App\Controller;

use App\entity\Docteur;
use App\Entity\patient;
use App\Form\Type\DocteurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DocteurController extends AbstractApiController
{
    public function indexActionDocteur(Request $request):Response
    {
        $docteurs =$this->getDoctrine()->getRepository(Docteur::class)->findAll();
        $this->respond($docteurs);

    }

    public function createActionDocteur(Request $request): Response
    {
        $form = $this->buildForm(DocteurType::class);

        $form->handleRequest($request);

        if (!$form->isSubmitted() || $form->isValid()){
           return $this->respond($form,Response::HTTP_BAD_REQUEST);


        }
        /**
         * @var Docteur $docteur
         */
        $docteur = $form->getData();

        $this->getDoctrine()->getManager()->persist($docteur);
        $this->getDoctrine()->getManager()->flush();


        return $this->respond($docteur);


    }


}