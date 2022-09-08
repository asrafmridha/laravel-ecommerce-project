<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apiuser extends Model
{
    use HasFactory;

    protected $fillable =[                   
            "name",
            "address",
            "phone",
            "email",
            "nid",
            "appname",
            "description",
            "url",
            "clientid",
            "token",
            "status"

    ];
}
