<?php


namespace App\Controller;

use App\Entity\patient;
use App\Form\Type\DocteurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PatientController extends AbstractApiController
{
    public function indexActionPatient(Request $request):Response
    {
        $patient =$this->getDoctrine()->getRepository(patient::class)->findAll();
        $this->respond($patient);

    }

    public function createActionPatient(Request $request): Response
    {
        $form = $this->buildForm(DocteurType::class);

        $form->handleRequest($request);

        if (!$form->isSubmitted() || $form->isValid()){
           return $this->respond($form,Response::HTTP_BAD_REQUEST);


        }
        /**
         * @var patient $patient
         */
        $patient = $form->getData();

        $this->getDoctrine()->getManager()->persist($patient);
        $this->getDoctrine()->getManager()->flush();


        return $this->respond($patient);


    }


}