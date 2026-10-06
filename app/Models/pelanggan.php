<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
   protected $table = 'pelanggan';
   protected $primarykey = 'pelanggan_id';
   protected $fillabel = [
        'first_name','last_name','birthday',
        'gender','email','phone'
     ];
}
