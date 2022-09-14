<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property string $nom
 * @property string $adresse
 * @property string $telephone
 * @property string $latitude
 * @property string $longitude
 * @property string $token
 * @property string $email
 * @property string $pseudo
 * @property string $password
 * @property string $avatar
 * @property string $cover
 * @property string $description
 * @property string $remember_token
 * @property int    $featured
 * @property int    $created_at
 * @property int    $updated_at
 */
class Restaurants extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'restaurants';

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
        'nom', 'adresse', 'telephone', 'latitude', 'longitude', 'token', 'email', 'pseudo', 'password', 'avatar', 'cover', 'heure_debut', 'heure_fin', 'description', 'pre_commande', 'status', 'featured', 'remember_token', 'created_at', 'updated_at'
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
        'nom' => 'string', 'adresse' => 'string', 'telephone' => 'string', 'latitude' => 'string', 'longitude' => 'string', 'token' => 'string', 'email' => 'string', 'pseudo' => 'string', 'password' => 'string', 'avatar' => 'string', 'cover' => 'string', 'description' => 'string', 'featured' => 'int', 'remember_token' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
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

    public function categories(){
        return $this->hasMany(Categories::class,'restaurant_id');
    }
}
