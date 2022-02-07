<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'email',
        'first_phone',
        'second_phone'	,
        'commercial_name',
    	'fax',
        'logo',
        'sector_type',
        'delegator',
        'client_type',
    	'gover',
        'city',
        'area',
        'active_type',
        'address',
        'line_number_type',
        'gas_type',
       'container_type',
       'app',
       'source',
       'location',
       'lawer_name',
       	'commercial_record',
        'tax_record',
        'whats_number',
        'client_case',

    ];


    public function clientSource()
    {
        return $this->belongsToMany(Source::class, 'client_source',
          'client_id', 'source_id');
    }

    public function clientApp()
    {
        return $this->belongsToMany(App::class, 'client_app',
          'client_id', 'app_id');
    }
    public function clientCont()
    {
        return $this->belongsToMany(App::class, 'client_cont',
          'client_id', 'cont_id');
    }
    public function clientGas()
    {
        return $this->belongsToMany(App::class, 'client_gas',
          'client_id', 'gas_id');
    }
}
