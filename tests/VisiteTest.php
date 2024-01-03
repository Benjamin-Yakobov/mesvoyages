<?php



namespace App\Tests;

use App\Entity\Visite;
use DateTime;
use PHPUnit\Framework\TestCase;

/**
 * Description of VisiteTest
 *
 * @author Benjamin
 */
class VisiteTest extends TestCase{
    
    public function testGetDatecreationString() {
        $visite = new Visite();
        $visite->setDatecreation(new DateTime("2024-01-02"));
        $this->assertEquals("02/01/2024", $visite->getDatecreationString());
    }
}
