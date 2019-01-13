<?php
namespace Tests\Feature;
use kaw393939\course\courseServiceProvider;
use Tests\TestCase;

class ExampleTest extends \Orchestra\Testbench\TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    protected function getPackageProviders($app)
    {
        return [courseServiceProvider::class];
    }

    public function testBasicTest()
    {
        $response = $this->get('api/courses/all');
        
        $response->assertStatus(200);
    }

}