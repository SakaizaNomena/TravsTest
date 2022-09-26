<?php
namespace App\tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\Response;

class ControllerThePropertyControllerTest extends WebTestCase
{
    public function listTheProperty()
    {
        $client = static::creactClient();
        $client->request('GET', '/client');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    } 
}