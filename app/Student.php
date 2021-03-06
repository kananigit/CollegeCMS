<?php

namespace oct;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'national_id', 'gender'
                            , 'dob', 'reg_no', 'course', 'department', 'email', 'mobile',
                            'postal_address', 'next_of_kin', 'next_of_kin_contact', 'guardian'];
}
