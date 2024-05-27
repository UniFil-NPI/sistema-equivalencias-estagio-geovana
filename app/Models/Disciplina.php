<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Disciplina
 *
 * @property $id
 * @property $nome
 * @property $ch
 * @property $ementa
 * @property $uc
 * @property $ead
 * @property $ativo
 * @property $core
 * @property $created_at
 * @property $updated_at
 *
 * @property AlunoDisciplina[] $alunoDisciplinas
 * @property Equivalencia[] $equivalencias
 * @property Equivalencia[] $equivalencias
 * @property GradeDisciplina[] $gradeDisciplinas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Disciplina extends Model
{
    use SoftDeletes;
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nome', 'ch', 'ementa', 'uc', 'ead', 'ativo', 'core'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alunoDisciplinas()
    {
        return $this->hasMany(\App\Models\AlunoDisciplina::class, 'id', 'id_disciplina');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function disciplina_equivalente()
    {
        return $this->hasMany(\App\Models\Equivalencia::class, 'id', 'id_disciplina_equivalente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equivalencias()
    {
        return $this->hasMany(\App\Models\Equivalencia::class, 'id', 'id_disciplina');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gradeDisciplinas()
    {
        return $this->hasMany(\App\Models\GradeDisciplina::class, 'id', 'id_disciplina');
    }
    
}
