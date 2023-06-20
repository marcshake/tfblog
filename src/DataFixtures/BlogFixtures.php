<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\BlogPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BlogFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $Author = new Author;
        $Author->setName('Author');
        $Author->setEmail('Author@Author.aut');
        $Author->setPhoto('testurl.jpg');
        $manager->persist($Author);
        for($i = 0; $i <= 20; $i++) {
            $blogpost = new BlogPost();
            $blogpost->setTitle('Title'.$i);
            $blogpost->setContents('Contents'.$i);
            $blogpost->setParent(1);
            $blogpost->setAuthor($Author);
            $manager->persist($blogpost);
        }
        // $product = new Product();
        
        $manager->flush();
    }
}
