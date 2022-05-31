<?php

namespace App\Entity\Tests;

use App\Entity\Work;
use PHPUnit\Framework\TestCase;

class WorkTest extends TestCase
{
    public function testWorkEntity(): void
    {
        $work = new Work();

        $newWorkTitle = "workTitleTest";
        $work->setTitle($newWorkTitle);
        $this->assertEquals('workTitleTest', $work->getTitle());

        $newWorkDescription = "workdescriptionTest";
        $work->setDescription($newWorkDescription);
        $this->assertEquals('workdescriptionTest', $work->getDescription());

        $newWorkMedia = "workMediaTest";
        $work->setMedia($newWorkMedia);
        $this->assertEquals('workMediaTest', $work->getMedia());
    }
}
