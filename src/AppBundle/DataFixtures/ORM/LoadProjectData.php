<?php

// src/AppBundle/DataFixtures/ORM/LoadUserData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Project;

class LoadProjectData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $project = new Project();
        $project->setName('Project 1');
        $project->setDescription('This is the description of a genuin Maxwan project 1.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project1.png');
        $project->setIsSlide(true);
        $project->setSlideImage('slide1.jpg');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('landscape'));

        $manager->persist($project);
        $manager->flush();
        
        $this->addReference('project1', $project);
        
        $project = new Project();
        $project->setName('Project 2');
        $project->setDescription('This is the description of a genuin Maxwan project 2.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project2.png');
        $project->setIsSlide(true);
        $project->setSlideImage('slide2.jpg');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('urbanism'));

        $manager->persist($project);
        $manager->flush();
        
        $project = new Project();
        $project->setName('Project 3');
        $project->setDescription('This is the description of a genuin Maxwan project 3.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project3.png');
        $project->setIsSlide(true);
        $project->setSlideImage('slide3.jpg');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('landscape'));
        
        $manager->persist($project);
        $manager->flush();
        
        $project = new Project();
        $project->setName('Project 5');
        $project->setDescription('This is the description of a genuin Maxwan project 4.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project4.png');
        $project->setIsSlide(true);
        $project->setSlideImage('slide4.jpg');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('urbanism'));
        
        $manager->persist($project);
        $manager->flush();
        
        $project = new Project();
        $project->setName('Project 5');
        $project->setDescription('This is the description of a genuin Maxwan project 5.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project5.png');
        $project->setIsSlide(true);
        $project->setSlideImage('slide5.jpg');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('landscape'));
        
        $manager->persist($project);
        $manager->flush();
        
        $project = new Project();
        $project->setName('Project 6');
        $project->setDescription('This is the description of a genuin Maxwan project 6.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project6.png');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('urbanism'));
        
        $manager->persist($project);
        $manager->flush();
        
        $project = new Project();
        $project->setName('Project 7');
        $project->setDescription('This is the description of a genuin Maxwan project 7.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project7.png');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('landscape'));
        
        $manager->persist($project);
        $manager->flush();
        
        $project = new Project();
        $project->setName('Project 8');
        $project->setDescription('This is the description of a genuin Maxwan project 8.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project8.png');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('urbanism'));
        
        $manager->persist($project);
        $manager->flush();
        
        $project = new Project();
        $project->setName('Project 9');
        $project->setDescription('This is the description of a genuin Maxwan project 9.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project9.png');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('landscape'));
        
        $manager->persist($project);
        $manager->flush();
        
        $project = new Project();
        $project->setName('Project 10');
        $project->setDescription('This is the description of a genuin Maxwan project 10.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project10.png');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('urbanism'));
        
        $manager->persist($project);
        $manager->flush();
        
        $project = new Project();
        $project->setName('Project 11');
        $project->setDescription('This is the description of a genuin Maxwan project 11.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project11.png');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('landscape'));
        
        $manager->persist($project);
        $manager->flush();
        
        $project = new Project();
        $project->setName('Project 12');
        $project->setDescription('This is the description of a genuin Maxwan project 12.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project5.png');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('urbanism'));
        
        $manager->persist($project);
        $manager->flush();
        
        $project = new Project();
        $project->setName('Project 13');
        $project->setDescription('This is the description of a genuin Maxwan project 13.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project7.png');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('landscape'));
        
        $manager->persist($project);
        $manager->flush();
        
        $project = new Project();
        $project->setName('Project 14');
        $project->setDescription('This is the description of a genuin Maxwan project 14.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project2.png');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('urbanism'));
        
        $manager->persist($project);
        $manager->flush();
        
        $project = new Project();
        $project->setName('Project 15');
        $project->setDescription('This is the description of a genuin Maxwan project 15.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project3.png');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('landscape'));
        
        $manager->persist($project);
        $manager->flush();
        
        $project = new Project();
        $project->setName('Project 16');
        $project->setDescription('This is the description of a genuin Maxwan project 16.');
        $project->setStatus(false);
        $project->setClient('Stadsbestuur Antwerpen');
        $project->setLocation('Antwerpen');
        $project->setTeam('Donald, Rients, Rene');
        $project->setCollaboration('Masa, IMG+');
        $project->setPhotography('DesignUAll');
        $project->setThumbnail('project10.png');
        $project->setQuote('This is the quote of this project.');
        $project->setCategory($this->getReference('urbanism'));

        $manager->persist($project);
        $manager->flush();
    }
    
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}