<?php

namespace App\Models;

use App\Models\User;
use App\Models\Panier;
use App\Models\CommandeItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'numero',
        'total'
    ];

    /**
     * Get the user that owns the Commande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the paniers for the Commande
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paniers(): HasMany
    {
        return $this->hasMany(Panier::class);
    }

    /**
    * Get all of the comments for the Commande
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function commandeItems(): HasMany
   {
        return $this->hasMany(CommandeItem::class);
   }
}
