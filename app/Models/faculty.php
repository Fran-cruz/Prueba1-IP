<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    /** @use HasFactory<\Database\Factories\FacultyFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    public function students() {
        return $this->hasMany(Student::class);
    }
}
