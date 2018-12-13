<?php

namespace App\Controller\Frontend;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Front extends Controller
{
    /**
    * @Route("/")
    */
    public function index()
    {
        return $this->render('main.twig', array(
    'pageData' => array(
        'title'     => 'Exceptional Servers Incorporated | Dedicated Server Experts',
        'generator'   => 'devCU ProCMS',
        'desc'   => 'Dedicated Server Experts',
        'keys'   => 'Ubuntu',
        'author'   => 'devCU Software',
        'fbpgid'   => 'devCU Software',
        'ogurl'   => 'https://www.exceptionalservers.com',
        'ogtype'   => 'website',
        'ogtitle'   => 'Exceptional Servers Incorporated | Dedicated Server Experts',
        'ogdesc'   => 'Dedicated Server Experts',
        'ogimg'   => 'devCU Software',
        'twcard'   => 'summary',
        'twsite'   => 'devCU Software',
        'twtitle'   => 'Exceptional Servers Incorporated | Dedicated Server Experts',
        'twdesc'   => 'Dedicated Server Experts',
        'twimg'   => 'devCU Software',
        ),
     ));
  }

}