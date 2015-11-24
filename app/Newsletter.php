<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = 'newsletter';

    protected $fillable = [
        'email',
        'onepager_options',
    ];

    protected $casts = [
        'onepager_options' => 'array',
    ];
}