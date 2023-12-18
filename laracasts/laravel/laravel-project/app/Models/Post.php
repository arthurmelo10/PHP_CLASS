<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory; 

    /**
     * array
     */
    protected $fillable = [
        'slug',
        'title',
        'excerpt',
        'body',
        'category_id',
        'user_id'
    ];

    /**
     * array
     */
    protected $with = [
        'category', 
        'author'
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
            $query
                ->where('title', 'like', '%' . $search. '%')
                ->orwhere('body', 'like', '%' . $search . '%'));
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
