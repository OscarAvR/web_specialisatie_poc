<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ProjectRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectRepository extends EntityRepository
{
    public function findSliderProjects()
    {
        $projects = $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Project p
                WHERE p.isSlide = 1'    
            )
            ->getResult();
            
        return $projects;
    }
    
    public function findMenuProjects()
    {
        $projects[0] = $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Project p 
                WHERE p.category = 1 
                ORDER BY p.id DESC'
            )
            ->setMaxResults(4)
            ->getResult();
            
        $projects[1] = $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Project p 
                WHERE p.category = 2 
                ORDER BY p.id DESC'
            )
            ->setMaxResults(4)
            ->getResult();
            
        return $projects;
    }
    
    public function findFeaturedProjects()
    {
        $projects = $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Project p 
                ORDER BY p.id DESC'
            )
            ->setMaxResults(16)
            ->getResult();
            
        return $projects;
    }
    
    public function findSimularProjects($category)
    {
        $projects = $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Project p 
                WHERE p.category = ' . $category . '
                ORDER BY p.id DESC'
            )
            ->setMaxResults(4)
            ->getResult();
            
        return $projects;
    }
}
