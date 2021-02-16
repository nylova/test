<?php


namespace App\Controller;

use App\entity\Docteur;
use App\Entity\patient;
use App\entity\Rdv;
use App\Form\Type\DocteurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


//ceci est le controlller du rdv (rendez-vous)


class RdvController extends AbstractApiController
{
    //on vas lister les rendez-vous
    public function showActionRdv(Request $request):Response
    {
        //le rendez-vous est consultable par id des patients
    $patientId = $request->get('id');

        $patient =$this->getDoctrine()->getRepository(patient::class)->findOneBy(['id'=>$patientId]);
    if (!$patientId){
        throw new NotFoundHttpException('le patient que vous cherchez n\a pas encore un rdv');

    }

        $rdv =$this->getDoctrine()->getRepository(Rdv::class)->findOneBy([
            'patient'=>$patient,
        ]);

        if (!$rdv){
            throw new NotFoundHttpException('le rdv n\existe pas encore');

        }
        $this->respond($rdv);

    }

    //cette fonction cree un nouveau rdv
    public function createActionRdv(Request $request): Response
    {
        $form = $this->buildForm(DocteurType::class);

        $form->handleRequest($request);

        if (!$form->isSubmitted() || $form->isValid()){
           return $this->respond($form,Response::HTTP_BAD_REQUEST);


        }
        /**
         * @var rdv $rdv
         */
        $rdv = $form->getData();

        $this->getDoctrine()->getManager()->persist($rdv);
        $this->getDoctrine()->getManager()->flush();


        return $this->respond($rdv);


    }

    //cette fonction supprime le rdv
    public function deleteAction(Request $request): Response
    {
        $rdvId = $request->get('rdvId');
        $patientId = $request->get('patientId');

        $rdv =$this->getDoctrine()->getRepository(Rdv::class)->findOneBy([
            'patient'=>$patientId,
            'id'=>$rdvId,
        ]);

        if (!$rdv){
            throw new NotFoundHttpException('RDV INTROUVABLE'); //message d'erreur

        }
        $this->getDoctrine()->getManager()->remove($rdv);
        $this->getDoctrine()->getManager()->flush($rdv);

        return $this->respond('');


    }


}