<?php

namespace Knowledge\HibarooBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class hibarooController extends Controller
{
    public function indexAction()
    {
        return $this->render('KnowledgeHibarooBundle:hibaroo:index.html.php');
    }
    
    public function welcomeAction()
    {
		return $this->redirect($this->generateUrl('Hibaroo'));
        // return $this->render('KnowledgeHibarooBundle:hibaroo:welcome.html.php');
    }
}
