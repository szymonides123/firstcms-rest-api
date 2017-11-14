<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    
    public function indexAction(Request $request)
    {
        
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
             return new Response( "GETSRET");
        } else if ($_SERVER['REQUEST_METHOD'] == "POST") {
            return new Response("POST");
        } else {
            return new Response("dupa");
        }
    }
}
