<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $nom
 * @property string $telephone
 * @property string $lieu_populaire
 * @property string $latitude
 * @property string $longitude
 * @property int    $status
 * @property int    $created_at
 * @property int    $updated_at
 */
class Adresses extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'adresses';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'telephone', 'lieu_populaire', 'latitude', 'longitude', 'status', 'user_id', 'created_at', 'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom' => 'string', 'telephone' => 'string', 'lieu_populaire' => 'string', 'latitude' => 'string', 'longitude' => 'string', 'status' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
