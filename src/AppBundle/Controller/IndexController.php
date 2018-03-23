<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Galeria;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $galleries = $em->getRepository(Galeria::class)->findAll();

        return $this->render('inxex.html.twig', [
            'galleries' => $galleries
        ]);
    }
}
