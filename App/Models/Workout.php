<?php

namespace App\Models;

use Framework\Core\Model;

class Workout extends Model
{
    public ?int $id = null;
    public string $name = '';
    public string $trainingDate = '';
    public ?string $note = null;
}