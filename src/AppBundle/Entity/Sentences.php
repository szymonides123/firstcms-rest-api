<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sentences
 *
 * @ORM\Table(name="sentences")
 * @ORM\Entity
 */
class Sentences
{
    /**
     * @var string
     *
     * @ORM\Column(name="sentencecontent", type="string", length=255, nullable=true)
     */
    private $sentencecontent;

    /**
     * @var integer
     *
     * @ORM\Column(name="sentenceid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sentenceid;


}

