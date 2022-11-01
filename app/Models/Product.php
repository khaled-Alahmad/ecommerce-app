<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory;
    use Searchable;

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'price' => $this->price,
        ];
    }

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters) // Post::newQuery()->filter
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query
                ->where('name', 'like', '%' . $search . '%');
        });
        $query->when($filters['category'] ?? false, function ($query, $category) {
            $query->whereHas('category', fn($query) => $query->where('name', $category)
            );
        });
//        if ($name) {
//            return $query->where('name','LIKE', '%'.$name.'%');
//        }

    }


    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
