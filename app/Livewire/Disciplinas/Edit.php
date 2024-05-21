<?php

namespace App\Livewire\Disciplinas;

use App\Livewire\Forms\DisciplinaForm;
use App\Models\Disciplina;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public DisciplinaForm $form;

    public function mount(Disciplina $disciplina)
    {
        $this->form->setDisciplinaModel($disciplina);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('disciplinas.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.disciplina.edit');
    }
}
