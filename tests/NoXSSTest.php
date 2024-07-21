<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Service\NoXSS;

class NoXSSTest extends WebTestCase
{
    public function testNoXSS(): void
    {
        $xss  = '<script>alert("XSS")</script>';
        $nettoyeur = new NoXSS();
        $propre = $nettoyeur->nettoyage($xss);
        $this->assertSame($propre, "");
    }
}