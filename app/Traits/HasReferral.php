<?php


namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

trait HasReferral
{

    public function initializeHasReferral()
    {
        $this->fillable = [...$this->fillable, 'referred_by', 'referrer_code'];
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if(request()?->get('ref')){
               $user_referred_by = static::referral(request()?->get('ref'))->first();
               $model->referred_by = $user_referred_by?->id;
            }
            $model->referrer_code = self::generateReferral();
        });

        static::created(function ($model) {
            if($model->referred_by){
                $referred_by = self::find($model->referred_by);
                $referred_by->increment('earned_points',self::calculate_earn_points($referred_by->referralCount())); 
            }
        });
    }

    public static function scopeReferral(Builder $query, $referral)
    {
        return $query->whereReferrerCode($referral);
    }
    public static function referralExists($referral)
    {
        return static::referral($referral)->exists();
    }

    public function referralCount()
    {
        return $this->referrals()->count();
    }

    public static function calculate_earn_points($number_of_referrals)
    {
        $earn_point = 0;
        if ($number_of_referrals <=  5) {
            $earn_point = 5;
          } else if ( $number_of_referrals >  5 && $number_of_referrals <= 10) {
            $earn_point = 7;
          } else if ($number_of_referrals >= 11) {
            $earn_point = 10;
          } 

          return $earn_point;
    }

    public function getReferralLink()
    {
        return url('/register').'?ref='.$this->referrer_code;
    }

    protected static function generateReferral()
    {
        do {
            $referral = Str::random(5);
        } while (static::referralExists($referral));

        return $referral;
    }

    public function referrals() { 
        return $this->hasMany(self::class, 'referred_by', 'id')->with('referrals');
    }
    public function referredBy() { 
        return $this->belongsTo(self::class, 'referred_by', 'id');
    }
   
}