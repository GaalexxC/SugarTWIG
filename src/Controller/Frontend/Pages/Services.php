<?php

namespace App\Controller\Frontend\Pages;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Services extends Controller
{
    /**
    * @Route("/")
    */
    public function services()
    {
        return $this->render('services.twig', array(
    'pageData' => array(
        'title'     => 'Exceptional Servers Incorporated | Services',
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

    public function servers()
    {
        return $this->render('servers.twig', array(
    'pageData' => array(
        'title'     => 'Exceptional Servers Incorporated | Pre-Built Servers',
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

    public function custom()
    {
        return $this->render('custom.twig', array(
    'pageData' => array(
        'title'     => 'Exceptional Servers Incorporated | Custom Services',
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

    public function clients()
    {
        return $this->render('clients.twig', array(
    'pageData' => array(
        'title'     => 'Exceptional Servers Incorporated | Client Services',
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

    public function design()
    {
        return $this->render('design.twig', array(
    'pageData' => array(
        'title'     => 'Exceptional Servers Incorporated | Design Services',
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