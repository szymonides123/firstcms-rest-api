<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('posts_api', new Route('/post', array(
    '_controller' => 'AppBundle:Post:index',
    )
));
return $collection;
