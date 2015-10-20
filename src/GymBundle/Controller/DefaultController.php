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
        $calendar = $this->getDoctrine()
            ->getRepository('GymBundle:Workouts')
            ->findAll();

        return $this->render('GymBundle:Default:index.html.twig', array("calendar" => $calendar));
    }

    /**
     * @Route("/getWorkout/{id_wo}", name="getWorkout")
     */
    public function getWorkout($id_wo) {

        $normalizers = array(new GetSetMethodNormalizer());
        $encoders = array('json' => new JsonEncoder());
        $serealizer = new Serializer($normalizers, $encoders);
        $exercises = $this->getDoctrine()
            ->getRepository('GymBundle:WorkoutsExercises')
            ->findBy(array('id_wo' => $id_wo));


        $response = new Response(
            $serealizer->serialize($exercises, 'json')
        );
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
