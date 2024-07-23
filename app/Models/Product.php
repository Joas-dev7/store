<?php

namespace App\Models;

use App\Models\Panier;
use App\Models\Category;
use App\Models\Favorite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'images'
    ];

    protected $casts = [
        'images' => 'array',
    ];

    /**
     * Get the user that owns the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get all of the panier for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paniers(): HasMany
    {
        return $this->haMany(Panier::class);
    }

    /**
     * Get all of the favorites for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }
}
