<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class sportsequip extends Model
{
    use HasFactory;
    use Sluggable; 
    use SoftDeletes;

    protected $table = 'sportsequip';
    protected $fillable = [
        'equip_code',
        'title',
        'cover',
        'slug', 
    ];

    //to make SEO (url) more friendly: url based of title
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    /**
     * The categories that belong to the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'sportsequip_category', 'sportequip_id', 'category_id');
    }
    
}
