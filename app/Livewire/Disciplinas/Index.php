<?php

namespace App\Livewire\Disciplinas;

use App\Models\Disciplina;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $disciplinas = Disciplina::paginate();

        return view('livewire.disciplina.index', compact('disciplinas'))
            ->with('i', $this->getPage() * $disciplinas->perPage());
    }

    public function delete(Disciplina $disciplina)
    {
        $disciplina->delete();

        return $this->redirectRoute('disciplinas.index', navigate: true);
    }
}
