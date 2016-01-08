<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $projects = $this->getDoctrine()
            ->getRepository('AppBundle:Project')
            ->findFeaturedProjects();
            
        if (!$projects) {
            throw $this->createNotFoundException(
                'No projects found'
            );
        }
        
        $projectsSlider = $this->getDoctrine()
            ->getRepository('AppBundle:Project')
            ->findSliderProjects();
        
        $projectsMenu = $this->getDoctrine()
            ->getRepository('AppBundle:Project')
            ->findMenuProjects();
        
        return $this->render('public/index.html.twig', array(
                                                        'projects' => $projects, 
                                                        'projectsMenu' => $projectsMenu,
                                                        'projectsSlider' => $projectsSlider));
    }
    
    /**
     * @Route("/category/{id}", name="category")
     */
    public function listAction($id)
    {
        $category = $this->getDoctrine()
            ->getRepository('AppBundle:Category')
            ->find($id);
            
        if (!$category) {
            throw $this->createNotFoundException(
                'No category found for id ' . $id
            );
        }
        
        $projectsMenu = $this->getDoctrine()
            ->getRepository('AppBundle:Project')
            ->findMenuProjects();
        
        return $this->render('public/category.html.twig', array(
                                                        'category' => $category,
                                                        'projectsMenu' => $projectsMenu));
    }
    
    /**
     * @Route("/project/{id}", name="project")
     */
    public function showAction($id)
    {
        $project = $this->getDoctrine()
            ->getRepository('AppBundle:Project')
            ->find($id);
            
        if (!$project) {
            throw $this->createNotFoundException(
                'No project found for id ' . $id
            );
        }
        
        $projectsSimular = $this->getDoctrine()
            ->getRepository('AppBundle:Project')
            ->findSimularProjects($project->getCategory()->getId());
        
         $projectsMenu = $this->getDoctrine()
            ->getRepository('AppBundle:Project')
            ->findMenuProjects();
        
        return $this->render('public/project.html.twig', array(
                                                        'project' => $project, 
                                                        'projectsMenu' => $projectsMenu, 
                                                        'projectsSimular' => $projectsSimular));
    }
}
