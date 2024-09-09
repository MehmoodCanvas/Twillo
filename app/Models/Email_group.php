<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email_group extends Model
{
    use HasFactory;
    protected $table = 'email_group';
    protected $primaryKey = 'email_group_id';
}
