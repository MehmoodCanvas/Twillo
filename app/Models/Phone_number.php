<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone_number extends Model
{
    use HasFactory;
    protected $table = 'phone';
    protected $primaryKey = 'phone_id';
    protected $fillable = ['phone_group_id','phone_number','phone_number_status'];

}
