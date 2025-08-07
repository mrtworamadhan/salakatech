<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'tagline',
        'icon_path',
        'is_active',
    ];

    /**
     * Get all of the plans for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plans(): HasMany
    {
        return $this->hasMany(Plan::class);
    }
}