<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $table ='students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'address',
        'mobile'
    ];
}
