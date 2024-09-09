<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    use HasFactory;
    protected $table = 'emails';
    protected $primaryKey = 'emails_id';
    protected $fillable = ['emails_group_id','emails_email','emails_status'];

}
