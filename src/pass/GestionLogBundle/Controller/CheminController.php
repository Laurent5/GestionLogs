<?php

/* 
 * Copyright 2015 Version 1.0.0
 * Pour le Pass, projet gestion de log.
 * 
 * @author Huygens Adrien
 * contact adrien.huygens@gmail.com
 */


namespace pass\GestionLogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
class CheminController 
{
    /**
     * @Route("/hello")
     * @Template()
     */
    public function indexAction()
    {
        return new Response("<html><body>Hello Wolrd</body></html>");
    }
}
