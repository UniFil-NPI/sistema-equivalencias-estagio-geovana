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

    public $search = "";

    #[Layout('layouts.app')]
    public function render(): View
    {
        $disciplinas = Disciplina::where('nome', 'like', '%' . $this->search . '%')->paginate();

        return view('livewire.disciplina.index', compact('disciplinas'))
            ->with('i', $this->getPage() * $disciplinas->perPage());
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function delete(Disciplina $disciplina)
    {
        $disciplina->delete();

        return $this->redirectRoute('disciplinas.index', navigate: true);
    }

    public function getTableRowUrl($disciplina)
    {
        return route('disciplinas.show', $disciplina->id);
    }
}
