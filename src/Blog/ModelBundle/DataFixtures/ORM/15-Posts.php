<?php

namespace Blog\ModelBundle\DataFixtures\ORM;

use Blog\ModelBundle\Entity\Author;
use Blog\ModelBundle\Entity\Post;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


/**
 * Fixtures for the Post Entity
 */
class Posts extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 15;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $p1 = new Post();
        $p1->setTitle('Lorem ipsum dolor sit amet,');
        $p1->setBody(
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus semper,
        lorem nec finibus faucibus, sem purus hendrerit lacus, quis venenatis leo arcu in diam.
        Quisque mollis cursus fermentum. Donec luctus ultrices interdum. Donec molestie nisi a
        tincidunt ultrices. Aenean non ultrices orci. Vestibulum non est a quam dictum blandit
        sed vitae mauris. Etiam eu luctus mauris, eget gravida felis. Nunc at sapien vel ante
        luctus mollis a id nisi. Integer venenatis tempus ligula eu commodo.

        Vivamus nisl felis, posuere ut lectus eget, porttitor sodales diam. Nulla facilisi.
        Nullam dapibus odio et mi varius facilisis. Aliquam viverra mauris ornare, placerat sem
        ut, faucibus ligula. Sed odio lectus, lobortis et purus sed, euismod egestas massa.
        Mauris euismod mauris leo, in elementum ante faucibus vitae. Phasellus id facilisis ipsum,
         in tristique turpis. Curabitur mollis fringilla ex eget auctor. Etiam id gravida felis.
         Vivamus vel justo vitae tellus posuere blandit sit amet quis enim. Sed quis quam imperdiet,
         tempus lacus ac, dignissim mi. Sed bibendum dictum augue. Praesent finibus suscipit eros,
         eu efficitur tellus porta non.'
        );
        $p1->setAuthor($this->getAuthor($manager, 'David'));

        $p2 = new Post();
        $p2->setTitle('Nulla convallis luctus arcu vitae volutpat');
        $p2->setBody(
            'Nulla convallis luctus arcu vitae volutpat. Praesent vel maximus velit. Etiam lectus risus,
             rutrum vel congue a, euismod quis dui. Integer lorem libero, auctor ut lorem ut, pharetra fe
             rmentum mi. Donec vestibulum nunc posuere auctor finibus. Nunc dapibus condimentum quam, sed
              cursus metus dictum ac. Vivamus vel ipsum semper, viverra risus at, varius turpis. Vivamus a
               posuere lectus. In hac habitasse platea dictumst. Integer cursus sit amet velit id congue.

Phasellus justo nulla, lobortis quis dui non, fermentum ultricies diam. Vestibulum magna risus, iaculis a
sodales quis, mollis id elit. Maecenas pulvinar, mi in laoreet aliquet, mi nulla lobortis lectus, at laore
et lorem purus vel nisl. Pellentesque lacinia eros turpis, nec consectetur velit blandit sit amet. Vivamus
 et dolor in nisl hendrerit maximus. Sed ut ligula justo. Proin malesuada orci vitae lacus tincidunt, vel s
 emper quam hendrerit. In tincidunt erat non quam lobortis, in condimentum augue tincidunt. Sed fermentum m
 olestie nisi, eu ornare elit sagittis venenatis. Cras id nisl est. Class aptent taciti sociosqu ad litora
  torquent per conubia nostra, per inceptos himenaeos. Quisque eget scelerisque nibh.'
        );
        $p2->setAuthor($this->getAuthor($manager, 'Eddie'));

        $p3 = new Post();
        $p3->setTitle('Sed convallis dui mauris');
        $p3->setBody(
            'Sed convallis dui mauris, nec egestas mi ultricies sed. Vestibulum maximus pellentesque
            erat, a aliquet lacus molestie nec. Suspendisse molestie nisi est, vel rhoncus odio egesta
            s dapibus. Vestibulum vulputate porta sapien. Curabitur auctor varius luctus. Etiam viverr
            a nibh justo, eget ornare leo laoreet id. Aenean at ipsum sit amet erat interdum venenatis
             sit amet a sem. Donec ornare viverra diam. Aliquam ultricies sem volutpat bibendum sollici
             tudin. Donec vitae eros auctor, luctus neque pharetra, semper purus.'
        );
        $p3->setAuthor($this->getAuthor($manager, 'Eddie'));

        $manager->persist($p1);
        $manager->persist($p2);
        $manager->persist($p3);

        $manager->flush();


    }

    /**
     * Get an author
     *
     * @param ObjectManager $manager
     * @param string  $name
     *
     * @return Author
     */
    private function getAuthor(ObjectManager $manager, $name)
    {
        return $manager->getRepository('ModelBundle:Author')->findOneBy(
            array(
                'name' => $name
            )
        );
    }



}