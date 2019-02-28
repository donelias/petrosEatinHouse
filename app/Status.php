<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'statuses';

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
    protected $fillable = ['name', 'slug'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
    
}
