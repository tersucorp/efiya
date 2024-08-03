<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'business_name',
        'business_type',
        'tax_id',
        'reg_no',
        'website_url',
        'house_number',
        'street',
        'city',
        'state',
        'country',
        'zip_code',
        'description',
        'services',
        'twitter',
        'facebook',
        'instagram',
        'email',
        'phone',
        'secondary_phone',
        'opening_hours',
        'closing_hours',
        'delivery_options',
        'return_policy',
        'ratings_count',
        'average_rating',
        'avatar',
        'banner'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
