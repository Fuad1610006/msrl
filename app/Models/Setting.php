<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory, SoftDeletes;

    //  public function buyerLogo()
    // {
    //     return $this->hasOne(BuyerLogo::class);
    // }

    // public function socialIcon()
    // {
    //     return $this->hasOne(SocialIcon::class);
    // }

    // public function sisterLogo()
    // {
    //     return $this->hasOne(SisterLogo::class);
    // }

    // public function trackRecord()
    // {
    //     return $this->hasOne(TrackRecord::class);
    // }
}
