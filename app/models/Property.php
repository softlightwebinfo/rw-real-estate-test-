<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Property extends \RefineriaWeb\RWRealEstate\Models\Property
{
    public function agent(){
        return $this->hasOne('\App\models\Agent','id', 'agent_id');
    }

    public function type(){
        return $this->hasOne('\App\models\PropertyType','id','properties_type_id');
    }

    public function location(){
        return $this->hasOne('\App\models\Location', 'id', 'location_id');
    }

    public function feature(){
        return $this->hasOne('\App\models\PropertyFeature');
    }
}
