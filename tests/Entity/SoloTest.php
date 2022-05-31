<?php

namespace App\Entity\Tests;

use App\Entity\Solo;
use PHPUnit\Framework\TestCase;

class SoloTest extends TestCase
{
    public function testSoloEntity(): void
    {
        $solo = new Solo();

        $newSoloTitle = "soloTitleTest";
        $solo->setTitle($newSoloTitle);
        $this->assertEquals('soloTitleTest', $solo->getTitle());

        $newSoloDescription = "solodescriptionTest";
        $solo->setDescription($newSoloDescription);
        $this->assertEquals('solodescriptionTest', $solo->getDescription());

        $newSoloMdeia = "soloMediaTest";
        $solo->setMedia($newSoloMdeia);
        $this->assertEquals('soloMediaTest', $solo->getMedia());

        $newSoloLink = "soloLinkTest";
        $solo->setLink($newSoloLink);
        $this->assertEquals('soloLinkTest', $solo->getLink());

        $newSoloImage = "soloImageTest";
        $solo->setImage($newSoloImage);
        $this->assertEquals('soloImageTest', $solo->getImage());

    }
}
