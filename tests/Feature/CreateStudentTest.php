<?php

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function PHPUnit\Framework\assertTrue;

uses(RefreshDatabase::class);

test('create student', function () {
    $student = Student::create([
        'name' => 'CHAB Sreylen',
        'email' => 'e20200671@itc.edu.kh',
        'phone' => '012 345 678',
        'dob' => '2002-10-01'
    ]);

    assertTrue($student->exists());
});
