<?php

namespace GymBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use GymBundle\Entity\Workouts;
use GymBundle\Entity\WorkoutsExercises;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="Calendar")
     */
    public function indexAction()
    {
        $measures = $this->getDoctrine()
            ->getRepository('GymBundle:Measures')
            ->findAll();

        $calendar = $this->getDoctrine()
            ->getRepository('GymBundle:Workouts')
            ->findAll();

        return $this->render('GymBundle:Default:index.html.twig', array(
            "calendar" => $calendar, "measures" => $measures
            )
        );
    }

    /**
     * @Route("/getWorkout/{id_wo}", name="getWorkout")
     */
    public function getWorkout($id_wo) {


        $responseData = array();
        $normalizers = array(new GetSetMethodNormalizer());
        $encoders = array('json' => new JsonEncoder());
        $exercises = $this->getDoctrine()
            ->getRepository('GymBundle:WorkoutsExercises')
            ->findBy(array('id_wo' => $id_wo));

        $sets = $this->getDoctrine()
            ->getRepository('GymBundle:Sets');

        $setMes = $this->getDoctrine()
            ->getRepository('GymBundle:SetsMeasures');
        foreach ($exercises as $exercise) {
            $exerciseSets = $sets->findBy(array('_id_wo_ex' => $exercise->getId()));

            $exerciseSet = [];
            foreach ($exerciseSets as $set) {
                $setId = $set->getId();
                $mew = $setMes->findBy(array('id_se' => $set->getId()));
                foreach ($mew as $me) {
                    $exerciseSet[$setId][$me->getIdMe()] = $me->getValues();
                }
            }

            $responseData[] = array(
                'id' => $exercise->getId(),
                'name' => $exercise->getExercisesNames(),
                'comment' => $exercise->getExercisesComments(),
                'sets' => $exerciseSet,
                );
        }

        $response = new Response(
            json_encode(
                $responseData
            )
        );
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/updateSet", name="updateSet")
     */
    public function updateSet(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $mesID = $request->get('mesId');
        $val = $request->get('val');

        if (!$id || !$mesID || !$val) {
            throw $this->createNotFoundException('Error with data');
        }

        $setMes = $this->getDoctrine()
            ->getRepository('GymBundle:SetsMeasures')
            ->findOneBy(array('id_se' => $id, 'id_me' => $mesID));

        if ($setMes) {
            $setMes->setValues($val);
            $em->flush();
        }

        $response = new Response(
            json_encode(
                array('true' => 'ok')
            )
        );

        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}
