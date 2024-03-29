<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        $this->getQueryForSearch($query, $filters);

        $this->getQueryForCategory($query, $filters);
                
        $this->getQueryForAuthor($query, $filters);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    private function getQueryForSearch($query, array $filters): void
    {
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
            $query->where( fn($query) =>
                $query->where('title', 'like', '%' . $search. '%')
                ->orwhere('body', 'like', '%' . $search . '%')
                )
            );
    }

    private function getQueryForCategory($query, array $filters): void
    {
        $query->when($filters['category'] ?? false, fn ($query, $category) =>
            $query->whereHas('category', fn($query) =>
                $query->where('slug', $category)));
    }

    private function getQueryForAuthor($query, array $filters): void
    {
        $query->when($filters['author'] ?? false, fn ($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)));
    }
}
