<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DiaryController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
		hjh
        return $this->render('diary/index.html.twig');
    }
}
