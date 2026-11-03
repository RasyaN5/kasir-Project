<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'price',
        'minimum_quantity',
        'ordering_requirements',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'minimum_quantity' => 'integer',
        ];
    }

    public function items(): HasMany
    {
        return $this->hasMany(PackageItem::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
