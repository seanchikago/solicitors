<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LsController extends Controller
{
    /**
     * @Route("/", name="show_ls")
     */
    public function showAction(Request $request)
    {
        //die ('LS is showing');
        // replace this example code with whatever you need
        return $this->render('lsdir/index.html.twig');
        //, [
            //'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        //]);
    }
}
