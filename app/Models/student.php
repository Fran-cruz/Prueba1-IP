<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = ['name', 'acc_num', 'email', 'phone', 'address', 'ref', 'active'];

    public function faculties() {
        return $this->belongsTo(Faculty::class);
    }

    public function courses() {
        return $this->belongsToMany(Course::class);
    }
}
