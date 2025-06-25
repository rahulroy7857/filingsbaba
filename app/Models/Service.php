<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'features',
        'requirements',
        'process',
        'benefits',
        'price',
        'duration',
        'category',
        'subcategory',
        'image',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'features' => 'array',
        'requirements' => 'array',
        'process' => 'array',
        'benefits' => 'array',
        'is_active' => 'boolean',
        'price' => 'decimal:2'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function getFeaturesArrayAttribute()
    {
        return is_string($this->features) ? json_decode($this->features, true) : $this->features;
    }

    public function getRequirementsArrayAttribute()
    {
        return is_string($this->requirements) ? json_decode($this->requirements, true) : $this->requirements;
    }

    public function getProcessArrayAttribute()
    {
        return is_string($this->process) ? json_decode($this->process, true) : $this->process;
    }

    public function getBenefitsArrayAttribute()
    {
        return is_string($this->benefits) ? json_decode($this->benefits, true) : $this->benefits;
    }
} 