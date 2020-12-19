<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'city', 'installment', 'downpayment', 'description', 'image', 'landing_imgs'];

}
