<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="fk_comments_users1_idx", columns={"userid"})})
 * @ORM\Entity
 */
class Comments
{
    /**
     * @var string
     *
     * @ORM\Column(name="com_content", type="string", length=500, nullable=true)
     */
    private $comContent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="com_date", type="date", nullable=true)
     */
    private $comDate;

    /**
     * @var string
     *
     * @ORM\Column(name="isactive", type="string", length=45, nullable=true)
     */
    private $isactive;

    /**
     * @var integer
     *
     * @ORM\Column(name="nested_comid", type="integer", nullable=true)
     */
    private $nestedComid;

    /**
     * @var integer
     *
     * @ORM\Column(name="postid", type="integer", nullable=true)
     */
    private $postid;

    /**
     * @var integer
     *
     * @ORM\Column(name="commentid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentid;

    /**
     * @var \AppBundle\Entity\FosUser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="id")
     * })
     */
    private $userid;


}

