<?php

use Gitalan\Gs\Models\StudentModel;

require 'vendor/autoload.php';

$student = new StudentModel();


$student->id=213;
$student->name="bebong123";
$student->course="IT";
$student->year_level=1;
$student->section="D";

$student->create();