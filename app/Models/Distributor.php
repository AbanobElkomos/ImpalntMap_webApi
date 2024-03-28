<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Distributor extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table = "distributors";
    protected $fillable = [
        'name', 'img',  "desc", "address","phone","whatsapp","website","facebook","twitter","youtube"
    ];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


}