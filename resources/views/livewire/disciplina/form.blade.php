<div class="space-y-6">
    
    <div>
        <x-input-label for="nome" :value="__('Nome')"/>
        <x-text-input wire:model="form.nome" id="nome" name="nome" type="text" class="mt-1 block w-full" autocomplete="nome" placeholder="Nome"/>
        @error('form.nome')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="ch" :value="__('Carga horária (horas)')"/>
        <x-text-input wire:model="form.ch" id="ch" name="ch" type="text" class="mt-1 block w-full" autocomplete="ch" placeholder="Digite a carga horária"/>
        @error('form.ch')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="ementa" :value="__('Ementa')"/>
        <x-text-input wire:model="form.ementa" id="ementa" name="ementa" type="text" class="mt-1 block w-full" autocomplete="ementa" placeholder="Ementa"/>
        @error('form.ementa')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="uc" :value="__('Uc')"/>
        <x-text-input wire:model="form.uc" id="uc" name="uc" type="checkbox" class="mt-1 block" autocomplete="uc" placeholder="Uc"/>
        @error('form.uc')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="ead" :value="__('Ead')"/>
        <x-text-input wire:model="form.ead" id="ead" name="ead" type="checkbox" class="mt-1 block" autocomplete="ead" placeholder="Ead"/>
        @error('form.ead')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="ativo" :value="__('Ativo')"/>
        <x-text-input wire:model="form.ativo" id="ativo" name="ativo" type="checkbox" class="mt-1 block" autocomplete="ativo" placeholder="Ativo"/>
        @error('form.ativo')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="core" :value="__('Core')"/>
        <x-text-input wire:model="form.core" id="core" name="core" type="checkbox" class="mt-1 block" autocomplete="core" placeholder="Core"/>
        @error('form.core')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Cadastrar</x-primary-button>
    </div>
</div>