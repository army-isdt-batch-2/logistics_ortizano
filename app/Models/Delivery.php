<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $table = "deliveries";
    protected $fillable = [
        'distribution_id',
        'transportation_id',
        'date_distributed',
        'status'

    ];
}
