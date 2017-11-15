<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostsHasTags
 *
 * @ORM\Table(name="posts_has_tags", indexes={@ORM\Index(name="IDX_E82F97B01F12D1069B83C3FD9B304EC7", columns={"posts_postid", "posts_categoryid", "posts_userid"}), @ORM\Index(name="IDX_E82F97B091F67F26", columns={"tags_tagid"})})
 * @ORM\Entity
 */
class PostsHasTags
{
    /**
     * @var integer
     *
     * @ORM\Column(name="posts_postid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $postsPostid;

    /**
     * @var integer
     *
     * @ORM\Column(name="posts_categoryid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $postsCategoryid;

    /**
     * @var integer
     *
     * @ORM\Column(name="posts_userid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $postsUserid;

    /**
     * @var \AppBundle\Entity\Tags
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Tags")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tags_tagid", referencedColumnName="tagid")
     * })
     */
    private $tagsTagid;


}

