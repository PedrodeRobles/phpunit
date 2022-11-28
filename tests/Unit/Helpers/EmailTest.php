<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function test_email()
    {
        // $email = 'pedro@gmail.com';
        // $result = (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
        $result = Email::validate('pedro@gmail.com');
        $this->assertTrue($result);

        $result = Email::validate('pedro@@gmail.com');
        $this->assertFalse($result);
    }
}
