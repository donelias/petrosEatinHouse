<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'name', 'slug', 'content', 'price', 'image', 'category_id', 'status_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function status()
    {
        return $this->belongsTo('App\Status');
    }
    public function orderItem()
    {
        return $this->hasMany('App\OrderItem');
    }
    
}
