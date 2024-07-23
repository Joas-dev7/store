<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeItem extends Model
{
    use HasFactory;

    protected $fillable = [ 'commande_id',
    'product_id', 
    'quantite' , 
    'price'];

}
