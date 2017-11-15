<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Posts;

class PostController extends Controller
{
    
    public function getAction(Request $request)
    {
        $posts = $this->getDoctrine()
                ->getRepository(Posts::class)
                ->findPostsall();
        
        $response = new Response(json_encode($posts));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    
    }
    public function postAction(Request $request)
    {
        return new Response("post");
    
    }
    public function putAction(Request $request)
    {
        return new Response("put");
    
    }
    public function deleteAction(Request $request)
    {
        return new Response("delete");
    
    }
}
