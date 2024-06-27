<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'subject',
    ];
    public function student(){
        return $this->belongsToMany(Student::class,'student_teacher');
    }
}
