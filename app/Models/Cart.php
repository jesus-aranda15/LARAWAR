<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['computer_id', 'quantity'];

    public function computer()
    {
        return $this->belongsTo(Computer::class, 'computer_id');
    }
}



