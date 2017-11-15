<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table(name="posts", indexes={@ORM\Index(name="fk_posts_categories1_idx", columns={"categoryid"}), @ORM\Index(name="fk_posts_users1_idx", columns={"userid"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostsRepository")
 */
class Posts
{
    /**
     * @var string
     *
     * @ORM\Column(name="posttitle", type="string", length=45, nullable=true)
     */
    private $posttitle;

    /**
     * @var string
     *
     * @ORM\Column(name="postcontent", type="text", length=65535, nullable=true)
     */
    private $postcontent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="postdate", type="date", nullable=true)
     */
    private $postdate;

    /**
     * @var string
     *
     * @ORM\Column(name="postimage", type="string", length=45, nullable=true)
     */
    private $postimage;

    /**
     * @var integer
     *
     * @ORM\Column(name="isactive", type="integer", nullable=true)
     */
    private $isactive;

    /**
     * @var integer
     *
     * @ORM\Column(name="postid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $postid;

    /**
     * @var \AppBundle\Entity\Categories
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoryid", referencedColumnName="categoryid")
     * })
     */
    private $categoryid;

    /**
     * @var \AppBundle\Entity\FosUser
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="id")
     * })
     */
    private $userid;


}

