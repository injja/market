<?php

namespace App\Models\Items;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'category_id', 'user_id', 'description', 'amount'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
