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
                'description' => '',
                'media' => 'cerf.jpg',
            ],
            [
                'title' => 'Maybe tonight, not tomorrow” (EP - 2020)',
                'description' => '',
                'media' => 'cerf.jpg',
            ],
            [
                'title' => 'Maybe tomorrow, not tonight” (EP - 2020)',
                'description' => '',
                'media' => 'cerf.jpg',
            ],

            ];    


            foreach ($soloData as $data) {
                $solo = new Solo();

                $solo->setTitle($data['title']);
                $solo->setMedia($data['media']);

                $manager->persist($solo);
            }

        $manager->flush($solo);
    }
}
