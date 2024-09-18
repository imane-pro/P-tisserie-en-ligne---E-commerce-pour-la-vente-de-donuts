<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductRating extends Model
{
    protected $fillable = [
        'user_id', 'product_id', 'rating', 'comment',
    ];

    // Relation avec l'utilisateur qui a effectué l'évaluation
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le produit évalué
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
