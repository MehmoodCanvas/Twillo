<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sms_group extends Model
{
    use HasFactory;
    protected $table = 'sms_group';
    protected $primaryKey = 'sms_group_id';
}
