<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;

class EmailTest extends TestCase
{
    public function testEmail()
    {
      // $email = 'doni@admin.com';
      // $result = (bool) filter_var($email, FILTER_VALIDATE_EMAIL);

      $result = Email::validate('doni@admin.com');
      $this->assertTrue($result);
    }
}
