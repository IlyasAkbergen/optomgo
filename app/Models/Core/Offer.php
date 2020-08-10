<?php

namespace App\Models\Core;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    use softDeletes;

    protected $fillable = [
      'title','description', 'price', 'retail_price', 'author_id'
    ];

    public function author()
    {
        return $this->belongsTo(
            User::class, 'author_id'
        );
    }
}
