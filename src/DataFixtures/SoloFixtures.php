<?php

namespace App\DataFixtures;

use App\Entity\Solo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SoloFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $soloData = [

            [
                'title' => 'Ultra modern blues” (LP - 2022)',
                'description' => 'Supersub - Ultra Modern Blues',
                'media' => '',
                'image' => 'UltraModernBlues.png',
                'link' => 'http://hyperurl.co/ultramodernblues',
            ],
            [
                'title' => 'Maybe tonight, not tomorrow (EP - 2020)',
                'description' => '',
                'media' => '',
                'image' => 'MaybeTonight.png',
                'link' => '',
            ],
            [
                'title' => 'Maybe tomorrow, not tonight (EP - 2020)',
                'description' => '',
                'media' => '',
                'image' => 'MaybeTomorrow.png',
                'link' => '',
            ],
            [
                'title' => 'Pay up / no past (LP - 2020)',
                'description' => '',
                'media' => '',
                'image' => 'PayUp.png',
                'link' => '',
            ],
            [
                'title' => 'The octopus (LP - 2019)',
                'description' => '',
                'media' => '',
                'image' => 'Octopus.png',
                'link' => '',
            ],
            [
                'title' => 'Golden voyager record (LP - 2015)',
                'description' => '',
                'media' => '',
                'image' => 'GoldenVoyager.png',
                'link' => '',
            ],
            [
                'title' => 'Fancies',
                'description' => '',
                'media' => 'https://www.youtube.com/embed/K_--KEZ5EuE',
                'image' => '',
                'link' => '',
            ],
            [
                'title' => 'The Never Promised Land',
                'description' => '',
                'media' => 'https://www.youtube.com/embed/oaWsGoc6DJA',
                'image' => '',
                'link' => '',
            ],
            [
                'title' => 'Follow The Powder',
                'description' => '',
                'media' => 'https://www.youtube.com/embed/Uo0tjz1SsQY',
                'image' => '',
                'link' => '',
            ],

            ];    


            foreach ($soloData as $data) {
                $solo = new Solo();

                $solo->setTitle($data['title']);
                $solo->setMedia($data['media']);
                $solo->setDescription($data['description']);
                $solo->setLink($data['link']);
                $solo->setImage($data['image']);

                $manager->persist($solo);
            }

        $manager->flush($solo);
    }
}
