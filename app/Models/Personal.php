<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Personal extends Authenticatable
{
    use Notifiable;

    protected $table = 'personals';
    protected $primaryKey = 'ci';
    public $incrementing = false;
    protected $keyType = 'integer';

    protected $fillable = ['ci', 'nombre', 'telefono', 'correo', 'password'];

    // Campos ocultos en las respuestas JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Sobrescribir el nombre del campo de email
    public function getEmailForPasswordReset()
    {
        return $this->correo;
    }

    // Sobrescribir el nombre del campo de password
    public function getAuthPassword()
    {
        return $this->password;
    }

    // Relaciones
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Rol::class, 'rol_personals', 'ciPersonal', 'codigoRol');
    }

    public function pedidos(): HasMany
    {
        return $this->hasMany(Pedido::class, 'ciPersonal');
    }

    public function bitacoras(): HasMany
    {
        return $this->hasMany(Bitacora::class, 'ciPersonal');
    }
}