<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class EndProduct extends Model {


    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['product_id','user_id','amt','balance',];



    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function ordersNumber(){
        return $this->belongsTo('App\OrdersNumber');
    }


    public function setProductIdAttribute($value){
        $this->attributes['product_id'] = strip_tags(intval($value));
    }
    public function setUserIdAttribute($value){
        $this->attributes['user_id'] = strip_tags(intval($value));
    }
    public function setAmtAttribute($value){
        $this->attributes['amt'] = strip_tags(intval($value));
    }


    public function getDateAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }
    public function getUpdatedAtAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }
}
