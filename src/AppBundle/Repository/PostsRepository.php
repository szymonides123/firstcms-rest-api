<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;




class PostsRepository extends EntityRepository
{
    public function findPostsall()
    {
        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare('SELECT * FROM posts p JOIN categories c ON p.categoryid = c.categoryid JOIN fos_user u ON p.userid = u.id ');
        $statement->execute();
        $post = $statement->fetchAll();
        
        return $post;    
    }
    
    public function findPostsbyid($id)
    {
        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare('SELECT * FROM posts p JOIN categories c ON p.categoryid = c.categoryid JOIN fos_user u ON p.userid = u.id WHERE p.postid = :id');
        $statement->bindValue(':id',$id ,"integer");
        $statement->execute();
        $post = $statement->fetchAll();
        
        return $post;    
    }
    
}
