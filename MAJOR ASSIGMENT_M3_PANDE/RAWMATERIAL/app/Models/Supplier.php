<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    // The original PHP table may not have created_at / updated_at columns.
    public $timestamps = false;

    protected $fillable = [
        'supplier_name',
        'supply_type',
        'contact_person',
        'vendor_address',
    ];
}
