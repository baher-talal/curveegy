<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'city', 'installment', 'downpayment', 'description', 'image', 'landing_imgs', 'title_ar', 'city_ar', 'installment_ar', 'downpayment_ar', 'description_ar'];

    /**
     * Get the post title.
     *
     * @param  string  $value
     * @return string
     */
    public function getTitleAttribute($value)
    {
        if(session()->get('language') == 'ar')
        return $this->title_ar;
        return $value;
    }
    /**
     * Get the post title.
     *
     * @param  string  $value
     * @return string
     */
    public function getCityAttribute($value)
    {
        if(session()->get('language') == 'ar')
        return $this->city_ar;
        return $value;
    }
    /**
     * Get the post title.
     *
     * @param  string  $value
     * @return string
     */
    public function getInstallmentAttribute($value)
    {
        if(session()->get('language') == 'ar')
        return $this->installment_ar;
        return $value;
    }
    /**
     * Get the post title.
     *
     * @param  string  $value
     * @return string
     */
    public function getDownpaymentAttribute($value)
    {
        if(session()->get('language') == 'ar')
        return $this->downpayment_ar;
        return $value;
    }
    /**
     * Get the post title.
     *
     * @param  string  $value
     * @return string
     */
    public function getDescriptionAttribute($value)
    {
        if(session()->get('language') == 'ar')
        return $this->description_ar;
        return $value;
    }
}
