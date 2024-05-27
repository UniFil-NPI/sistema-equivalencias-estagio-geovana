<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Cadastro') }} de disciplina
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="w-full">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Cadastrar') }} disciplina</h1>
                        <p class="mt-2 text-sm text-gray-700">Cadastre uma nova {{ __('disciplina') }}.</p>
                    </div>
                    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                        <a type="button" wire:navigate href="{{ route('disciplinas.index') }}" class="block rounded-md bg-orange-unifil px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-orange-unifil-hover focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Voltar</a>
                    </div>
                </div>

                <div class="flow-root">
                    <div class="mt-8 overflow-x-auto">
                        <div class="max-w-xl py-2 align-middle">
                            <form method="POST" wire:submit="save" role="form" enctype="multipart/form-data">
                                @csrf
                                @include('livewire.disciplina.form')
                                <div class="flex items-center gap-4 mt-10">
                                    <x-primary-button>Cadastrar</x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
