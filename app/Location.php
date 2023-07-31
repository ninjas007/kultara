<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';

    public function reviews()
    {
        return $this->hasMany(LocationReview::class, 'tempat_id', 'id');
    }

    public function sumRating()
    {
        return $this->reviews()->sum('rating') ?? 0;
    }

    public function totalReviews()
    {
        return $this->reviews()->count() ?? 0;
    }

    public function getAttrRatingPlaceAttribute()
    {
        $sum_rating = $this->sumRating();
        $total_reviews = $this->totalReviews();

        if ($sum_rating == 0 && $total_reviews == 0) {
            return 0;
        }

        return ceil($sum_rating / $total_reviews);
    }

    public function getAttrRatingStarHtmlAttribute(){
        $total_rating_place = $this->getAttrRatingPlaceAttribute();

        $star1 = 'text-muted';
        $star2 = 'text-muted';
        $star3 = 'text-muted';
        $star4 = 'text-muted';
        $star5 = 'text-muted';

        if ($total_rating_place >= 1) {
            $star1 = 'text-warning';
        }

        if ($total_rating_place >= 2) {
            $star2 = 'text-warning';

        }

        if ($total_rating_place >= 3) {
            $star3 = 'text-warning';
        }

        if ($total_rating_place >= 4) {
            $star4 = 'text-warning';

        }

        if ($total_rating_place >= 5) {
            $star5 = 'text-warning';
        }

        return "
        <li>
            <i class='fas fa-star fa-sm $star1'></i>
        </li>
        <li>
            <i class='fas fa-star fa-sm $star2'></i>
        </li>
        <li>
            <i class='fas fa-star fa-sm $star3'></i>
        </li>
        <li>
            <i class='fas fa-star fa-sm $star4'></i>
        </li>
        <li>
            <i class='fas fa-star fa-sm $star5'></i>
        </li>"; 
    }
}
