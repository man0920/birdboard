<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function it_has_a_path()
    {
        $project = factory('App\Project')->create();
        $this->assertEquals('/projects/'.$project->id,$project->path());
    }
}
