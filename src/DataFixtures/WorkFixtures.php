<?php

namespace App\DataFixtures;

use App\Entity\Work;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class WorkFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $workData = [

            [
                'title' => 'Laisse entre la nature (France TV)',
                'description' => '',
                'media' => 'https://www.youtube.com/embed/R-6wKkYcQws?list=PLzOVI1HFKxWZgfu8m25S_rpwDHUGEnu14',
            ],
            [
                'title' => 'Laisse entre la nature (France TV)',
                'description' => '',
                'media' => 'https://www.youtube.com/embed/Ay3I4ELXKiE?list=PLzOVI1HFKxWZgfu8m25S_rpwDHUGEnu14',
            ],
            [
                'title' => '20 ans en 2022 (LCP)',
                'description' => '',
                'media' => 'https://www.dailymotion.com/embed/video/x89j1cs?autoplay=0',
            ],
            [
                'title' => 'Bande annonce (« Saucisse : une tradition hachée menu ? » doc France 5)',
                'description' => '',
                'media' => 'https://www.dailymotion.com/embed/video/x87cx8g?autoplay=0',
            ],

            ];


            foreach ($workData as $data) {
                $work = new Work();

                $work->setTitle($data['title']);
                $work->setMedia($data['media']);

                $manager->persist($work);
            }

        $manager->flush($work);
    }
}
