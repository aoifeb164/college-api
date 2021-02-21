<?php
# @Date:   2020-12-31T09:12:14+00:00
# @Last modified time: 2021-02-21T12:00:11+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function enrolments()
    {
        return $this->hasMany('App\Models\Enrolment');
    }
}
hello
