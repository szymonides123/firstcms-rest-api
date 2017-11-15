<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags
 *
 * @ORM\Table(name="tags")
 * @ORM\Entity
 */
class Tags
{
    /**
     * @var string
     *
     * @ORM\Column(name="tagname", type="string", length=45, nullable=true)
     */
    private $tagname;

    /**
     * @var integer
     *
     * @ORM\Column(name="tagid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagid;


}

