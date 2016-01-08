<?php

// src/AppBundle/DataFixtures/ORM/LoadProjectPhotoData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\ProjectPhoto;

class LoadProjectPhotoData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $projectPhoto = new ProjectPhoto();
        $projectPhoto->setFilename('slide1.jpg');
        $projectPhoto->setProject($this->getReference('project1'));
        
        $manager->persist($projectPhoto);
        $manager->flush();
        
        $projectPhoto = new ProjectPhoto();
        $projectPhoto->setFilename('slide2.jpg');
        $projectPhoto->setProject($this->getReference('project1'));
        
        $manager->persist($projectPhoto);
        $manager->flush();
        
        $projectPhoto = new ProjectPhoto();
        $projectPhoto->setFilename('slide3.jpg');
        $projectPhoto->setProject($this->getReference('project1'));
        
        $manager->persist($projectPhoto);
        $manager->flush();
        
        $projectPhoto = new ProjectPhoto();
        $projectPhoto->setFilename('slide4.jpg');
        $projectPhoto->setProject($this->getReference('project1'));
        
        $manager->persist($projectPhoto);
        $manager->flush();
        
        $projectPhoto = new ProjectPhoto();
        $projectPhoto->setFilename('slide5.jpg');
        $projectPhoto->setProject($this->getReference('project1'));
        
        $manager->persist($projectPhoto);
        $manager->flush();
    }
    
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 3;
    }
}