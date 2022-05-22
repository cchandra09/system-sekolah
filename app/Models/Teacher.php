<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
class Teacher extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_card', 
        'nip', 
        'teacher_name', 
        'course_id', 
        'code', 
        'gender', 
        'no_phone', 
        'place_of_birth', 
        'date_of_birth', 
        'path_photo'
    ];
}
