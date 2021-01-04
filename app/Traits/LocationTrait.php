<?php
namespace App\Traits;

use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Stevebauman\Location\Facades\Location;

trait LocationTrait {
    public function setLocation()
    {
        $portuguese = ['PT','BR','MZ','AO','GW','TL','GQ','MO','CV','ST'];
        $spanish = ['RA','BO','CL','CO','CR','CU','DO','EC','SV','GT','HN','MX','NI','PA','PE','PY','ES','UY','VE'];
        try{
            $ip = request()->ip();
            $position = Location::get($ip);
    
            if(in_array($position->countryCode,$portuguese)){
                App::setLocale('pt');
            }
    
            if(in_array($position->countryCode,$spanish)){
                App::setLocale('es');
            }
        }catch(Exception $e){
            Log::error('Error al setear la localizacion: '.$e->getMessage());
            Log::debug('Error al setear la localizacion: '.$e->getMessage());
        }
    }
}