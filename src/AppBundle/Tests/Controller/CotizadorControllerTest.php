<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CotizadorControllerTest extends WebTestCase
{
    public function testInicio()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/inicio');
    }

    public function testCotizar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cotizar');
    }

}
