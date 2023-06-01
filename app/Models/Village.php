<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaravelCommon\App\Models\TraitModel;

class Village extends Model
{
    use HasFactory;
    use TraitModel;

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of district_name
     */ 
    public function getDistrictName()
    {
        return $this->district_name;
    }

    /**
     * Set the value of district_name
     *
     * @return  self
     */ 
    public function setDistrictName($districtName)
    {
        $this->district_name = $districtName;

        return $this;
    }

    /**
     * Get the value of city_name
     */ 
    public function getCityName()
    {
        return $this->city_name;
    }

    /**
     * Set the value of city_name
     *
     * @return  self
     */ 
    public function setCityName($cityName)
    {
        $this->city_name = $cityName;

        return $this;
    }
}
