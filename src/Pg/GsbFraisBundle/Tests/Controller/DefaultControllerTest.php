<?php

namespace Pg\GsbFraisBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    /*public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Fabien');

        $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }*/

    public function testSaisirVehicule(){

    	$client = static::createClient();

        $crawler = $client->request('GET', '/saisirvehicule');

        $this->assertTrue($crawler->filter('html:contains("Numéro d\'immatriculation du véhicule")')->count() > 0);
    }
}
