<?php

namespace App\Livewire\Forms;

use App\Models\Disciplina;
use Livewire\Form;

class DisciplinaForm extends Form
{
    public ?Disciplina $disciplinaModel;
    
    public $nome = '';
    public $ch = '';
    public $ementa = '';
    public $uc = '';
    public $ead = '';
    public $ativo = '';
    public $core = '';

    public function rules(): array
    {
        return [
			'nome' => 'required|string',
			'ch' => 'required',
			'ementa' => 'required|string',
			'uc' => 'required|boolean',
			'ead' => 'boolean',
			'ativo' => 'required|boolean',
			'core' => 'required|boolean',
        ];
    }

    public function setDisciplinaModel(Disciplina $disciplinaModel): void
    {
        $this->disciplinaModel = $disciplinaModel;
        
        $this->nome = $this->disciplinaModel->nome;
        $this->ch = $this->disciplinaModel->ch;
        $this->ementa = $this->disciplinaModel->ementa;
        $this->uc = $this->disciplinaModel->uc;
        $this->ead = $this->disciplinaModel->ead;
        $this->ativo = $this->disciplinaModel->ativo;
        $this->core = $this->disciplinaModel->core;
    }

    public function store(): void
    {
        $this->disciplinaModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->disciplinaModel->update($this->validate());

        $this->reset();
    }
}
