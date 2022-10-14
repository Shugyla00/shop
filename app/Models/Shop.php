<?php

namespace App\Models;

use App\Http\Controllers\ShopController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Fabrica;

class Shop extends Model
{
    use HasFactory;

    protected $fillable =  ['name', 'price', 'size'];

    public function fabrica(){
        return $this->belongsTo(Fabrica::class);
    }
}
