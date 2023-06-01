<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaravelCommon\App\Database\Eloquent\Relations\BelongsToRelation;
use LaravelCommon\App\Models\TraitModel;

class Patient extends Model
{
    use HasFactory;
    use TraitModel;

    protected BelongsToRelation $village;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date_of_birth' => 'datetime',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->village = new BelongsToRelation($this, Village::class, 'village_id');
    }

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
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of rt
     */ 
    public function getRt()
    {
        return $this->rt;
    }

    /**
     * Set the value of rt
     *
     * @return  self
     */ 
    public function setRt($rt)
    {
        $this->rt = $rt;

        return $this;
    }

    /**
     * Get the value of rw
     */ 
    public function getRw()
    {
        return $this->rw;
    }

    /**
     * Set the value of rw
     *
     * @return  self
     */ 
    public function setRw($rw)
    {
        $this->rw = $rw;

        return $this;
    }

    /**
     * Get the value of dateOfBirth
     */ 
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    /**
     * Set the value of dateOfBirth
     *
     * @return  self
     */ 
    public function setDateOfBirth($dateOfBirth)
    {
        $this->date_of_birth = $dateOfBirth;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of village
     */ 
    public function getVillage(): ?Village
    {
        return $this->village->get();
    }

    /**
     * Set the value of village
     *
     * @return  self
     */ 
    public function setVillage($village)
    {
        $this->village->set($village);

        return $this;
    }
}
