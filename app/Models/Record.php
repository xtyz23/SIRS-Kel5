<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    // Define the table name (optional, uses class name by default)
    protected $table = 'record';

    // Define the primary key (optional, assumes 'id' by default)
    protected $primaryKey = 'id_record';

    // Fillable fields (optional, allows mass assignment)
    protected $fillable = [
        'recorddescription',
    ];

    public $timestamps = false;
}