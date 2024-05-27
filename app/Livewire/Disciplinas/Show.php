<?php

namespace App\Livewire\Disciplinas;

use App\Livewire\Forms\DisciplinaForm;
use App\Models\Disciplina;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public DisciplinaForm $form;

    public function mount(Disciplina $disciplina)
    {
        $this->form->setDisciplinaModel($disciplina);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.disciplina.show', ['disciplina' => $this->form->disciplinaModel]);
    }
}
