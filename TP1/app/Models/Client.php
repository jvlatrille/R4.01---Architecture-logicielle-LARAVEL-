<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model {
    use HasFactory;

    protected $table = 'clients';
    protected $primaryKey = 'numeroClient';
    protected $fillable = ['prenom', 'nom', 'age', 'email', 'adresse', 'carteBancaire'];
    protected $casts = [
        'numeroClient' => 'integer',
        'prenom' => 'string',
        'nom' => 'string',
        'age' => 'integer',
        'email' => 'string',
        'adresse' => 'string',
        'carteBancaire' => 'string'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
