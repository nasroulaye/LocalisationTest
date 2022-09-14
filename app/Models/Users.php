<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $nom
 * @property string $prenoms
 * @property string $email
 * @property string $adresse
 * @property string $telephone
 * @property string $whatsapp
 * @property string $token
 * @property string $password
 * @property string $avatar
 * @property string $profession
 * @property string $remember_token
 * @property Date   $date_naissance
 * @property float  $solde
 * @property int    $is_occuped
 * @property int    $is_working
 * @property int    $created_at
 * @property int    $updated_at
 */
class Users extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

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
        'nom', 'prenoms', 'email', 'adresse', 'telephone', 'whatsapp', 'token', 'password', 'avatar', 'profession', 'date_naissance', 'solde', 'type_user', 'sexe', 'status', 'is_occuped', 'is_working', 'remember_token', 'created_at', 'updated_at'
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
        'nom' => 'string', 'prenoms' => 'string', 'email' => 'string', 'adresse' => 'string', 'telephone' => 'string', 'whatsapp' => 'string', 'token' => 'string', 'password' => 'string', 'avatar' => 'string', 'profession' => 'string', 'date_naissance' => 'date', 'solde' => 'double', 'is_occuped' => 'int', 'is_working' => 'int', 'remember_token' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date_naissance', 'created_at', 'updated_at'
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
