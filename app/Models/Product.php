<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $fillable = ['nombre','precio','peso','ancho','alto','largo','stock'];
}

