<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminTest extends WebTestCase
{
public function testAdmin(): void
{
$client = static::createClient();
$client->request('GET', '/admin/user');

// Vérifier si la réponse est une redirection
$this->assertTrue($client->getResponse()->isRedirect());

}
}

