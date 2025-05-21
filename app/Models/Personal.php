<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Personal extends Authenticatable
{
    use HasFactory;
    protected $table = 'personal';
    protected $fillable = ['ci', 'nombre', 'telefono', 'correo', 'password','rol'];
    protected $hidden = ['password'];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Rol::class, 'rol_personals', 'ciPersonal', 'codigoRol');
    }
    public function getAuthPassword()
    {
        return $this->password;
    }
    public $timestamps =false;
}
/* protected $table = 'personal';
    protected $primaryKey = 'ci';
    public $incrementing = false;
    protected $keyType = 'integer';

    protected $fillable = ['ci', 'nombre', 'telefono', 'correo', 'password'];

    protected $hidden = ['password'];

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
    }*/