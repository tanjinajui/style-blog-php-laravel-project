<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
    protected $fillable=['about_title', 'sales_manager_name', 'manager_name', 'team_title', 'about_description', 'about_picture', 'sales_manager_picture', 'manager_picture'];
}
