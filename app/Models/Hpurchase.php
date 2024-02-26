<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hpurchase extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public static function boot(){
        parent::boot();

        static::creating(function($nofaktur){
            $nofaktur->no_faktur = static::generateInvoiceNumber();
        });
    }

    public static function generateInvoiceNumber() {
        return 'INV-'.date('Ymd').'-'.str_pad(static::count()+1,4,'0',STR_PAD_LEFT);
    }
}
