<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include '../settings/db_class.php';

final class ConnectionTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertTrue(connection());
    }
    public function testFailure1(): void
    {
        $this->assertTrue(fetch('select * from products'));
    }
}

?>
