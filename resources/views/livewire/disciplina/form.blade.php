<div class="space-y-6">
    
    <div>
        <x-input-label for="nome" :value="__('Nome')"/>
        <x-text-input wire:model="form.nome" id="nome" name="nome" type="text" class="mt-1 ml-1 block w-full" autocomplete="nome" placeholder="Digite o nome da disciplina"/>
        @error('form.nome')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="ch" :value="__('Carga horária (horas)')"/>
        <x-text-input wire:model="form.ch" id="ch" name="ch" type="text" class="mt-1 ml-1 block w-full" autocomplete="ch" placeholder="Digite a carga horária"/>
        @error('form.ch')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="ementa" :value="__('Ementa')"/>
        <x-text-input wire:model="form.ementa" id="ementa" name="ementa" type="text" class="mt-1 ml-1 block w-full" autocomplete="ementa" placeholder="Ementa"/>
        @error('form.ementa')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="uc" :value="__('Tipo')"/>
        <div class="flex flex-row"> 
            <div class="flex flex-row mr-16">
                <x-text-input wire:model.lazy="form.uc"  id="unidade_curricular" wire:click="$dispatch('allow')" name="uc" type="radio" value=1 class="mt-1 ml-1 block mr-3" />
                <x-input-label for="unidade_curricular" :value="__('Unidade Curricular')"/>
            </div>
        
            <div class="flex flex-row">
                <x-text-input wire:model.lazy="form.uc" wire:click="$dispatch('clear')"  id="disciplina" name="uc" type="radio" value=0 class="mt-1 ml-1 block mr-3" />
                <x-input-label for="disciplina" :value="__('Disciplina')"/>
            </div>
        </div>
        
        @error('form.uc')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    
    <div>
        <x-input-label for="ead" :value="__('Modalidade')"/>
        <div class="flex flex-row"> 
            <div class="flex flex-row mr-16">
                <x-text-input wire:model="form.ead" id="presencial" name="ead" type="radio" value=1 class="mt-1 ml-1 block mr-3 disabled-radio" :disabled="$form->uc != '1'"/>
                <x-input-label for="presencial" :value="__('Presencial')" />
            </div>
        
            <div class="flex flex-row">
                <x-text-input wire:model="form.ead" id="ucd" name="ead" type="radio" value=0 class="mt-1 ml-1 block mr-3 disabled-radio" :disabled="$form->uc != 1"/>
                <x-input-label for="ucd" :value="__('UCD (Unidade Curricular Digital)')"/>
            </div>
        </div>
        @error('form.ead')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="ativo" :value="__('Ativação')"/>
        <div class="flex flex-row"> 
            <div class="flex flex-row mr-16">
                <x-text-input wire:model="form.ativo" id="ativo" name="ativo" type="radio" value=1 class="mt-1 ml-1 block mr-3 disabled-radio" :disabled="$form->uc != 1"/>
                <x-input-label for="ativo" :value="__('Ativo')"/>
            </div>
        
            <div class="flex flex-row">
                <x-text-input wire:model="form.ativo" id="inativo" name="ativo" type="radio" value=0 class="mt-1 ml-1 block mr-3 disabled-radio" :disabled="$form->uc != 1"/>
                <x-input-label for="inativo" :value="__('Inativo')"/>
            </div>
        </div>
        @error('form.ativo')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="core" :value="__('Obrigatoriedade')"/>
        <div class="flex flex-row"> 
            <div class="flex flex-row mr-16">
                <x-text-input wire:model="form.core" id="core" name="core" type="radio" value=1 class="mt-1 ml-1 block mr-3 disabled-radio" :disabled="$form->uc != 1"/>
                <x-input-label for="core" :value="__('Core')"/>
            </div>
        
            <div class="flex flex-row">
                <x-text-input wire:model="form.core" id="flex" name="core" type="radio" value=0 class="mt-1 ml-1 block mr-3 disabled-radio" :disabled="$form->uc != 1"/>
                <x-input-label for="flex" :value="__('Flex')"/>
            </div>
        </div>
        @error('form.core')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>        
    @script
    <script>

           $wire.on('clear', function () {
                let presencial = document.getElementById('presencial')
                presencial.checked = false;
                presencial.classList.add('disabled-radio');

                let ucd = document.getElementById('ucd')
                ucd.checked = false;
                ucd.classList.add('disabled-radio');

                let ativo = document.getElementById('ativo')
                ativo.checked = false;
                ativo.classList.add('disabled-radio');

                let inativo = document.getElementById('inativo')
                inativo.checked = false;
                inativo.classList.add('disabled-radio');

                let core = document.getElementById('core')
                core.checked = false;
                core.classList.add('disabled-radio');

                let flex = document.getElementById('flex')
                flex.checked = false;
                flex.classList.add('disabled-radio');
            });
            

            $wire.on('allow', function () {
                let presencial = document.getElementById('presencial')
                presencial.classList.remove('disabled-radio');
                presencial.classList.remove('disabled-radio');

                let ucd = document.getElementById('ucd')
                ucd.classList.remove('disabled-radio');

                let ativo = document.getElementById('ativo')
                ativo.classList.remove('disabled-radio');

                let inativo = document.getElementById('inativo')
                inativo.classList.remove('disabled-radio');

                let core = document.getElementById('core')
                core.classList.remove('disabled-radio');

                let flex = document.getElementById('flex')
                flex.classList.remove('disabled-radio');
            });
    
    </script>
@endscript

<style>
    .disabled-radio {
        background-color: #e0e0e0;
        opacity: 0.6;
    }
</style>

    
    
</div>