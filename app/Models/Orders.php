<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $reference
 * @property string $description
 * @property int    $pay_arrival
 * @property int    $adresse_id
 * @property int    $created_at
 * @property int    $updated_at
 * @property float  $prix
 * @property float  $prix_livraison
 */
class Orders extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

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
        'reference', 'pay_arrival', 'prix', 'prix_livraison', 'description', 'user_id', 'livreur_id', 'restaurant_id', 'status', 'status_delivery', 'adresse_id', 'created_at', 'updated_at'
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
        'reference' => 'string', 'pay_arrival' => 'int', 'prix' => 'double', 'prix_livraison' => 'double', 'description' => 'string', 'adresse_id' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
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
