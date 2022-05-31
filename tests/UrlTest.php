<?php

namespace App\Tests;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UrlTest extends WebTestCase
{
    public function testUrls(): void
    {
        $client = static::createClient();
        $client->request('GET', '');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Nicolas Crelier');

    }

    /**
     * @dataProvider urlsList
     *
     */
    public function testUrlsAdmin($urls): void
    {
        $client = static::createClient();
        $client->request('GET', '');
        $userRepository = static::getContainer()->get(UserRepository::class);

        // ROLE_ADMIN
        $testUser = $userRepository->findOneBy(['email' => 'youlooklikeabuffalo@gmail.com']);
        $client->loginUser($testUser);
        $client->request('GET', $urls);
        $this->assertResponseIsSuccessful();
    }

    public function urlsList()
    {

        return [
            [''],
            ['/login'],
            ['/solo'],
            ['/contact'],
            ['/login'],
            ['/back/'],
            ['/back/work/'],
            ['/back/solo/'],
            ['/back/user/'],
        ];
    }
}
