<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'total',
        'quantite'
    ];

    /**
     * Get the user that owns the Panier
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the commande that owns the Panier
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commande(): BelongsTo
    {
        return $this->belongsTo(Commande::class);
    }

    /**
     * Get all of the products for the Panier
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

}
