<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $fillable = [
        'user_id', 'product_name', 'product_category',	'company_name',	'rating', 'total_vote', 'price', 'shopping_cost', 'description', 'image', 'url',
    ];


}
