<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('postget', new Route('/posts', array(
    '_controller' => 'AppBundle:Post:get',
), array(), array(), '', array(), array('GET')));
$collection->add('postput', new Route('/posts', array(
    '_controller' => 'AppBundle:Post:post',
), array(), array(), '', array(), array('POST')));
$collection->add('postpost', new Route('/posts', array(
    '_controller' => 'AppBundle:Post:put',
), array(), array(), '', array(), array('PUT')));
$collection->add('postdelete', new Route('/posts', array(
    '_controller' => 'AppBundle:Post:delete',
), array(), array(), '', array(), array('DELETE')));


return $collection;
