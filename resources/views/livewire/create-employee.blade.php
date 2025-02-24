<div>
    <x-button @click="$wire.set('showForm',true)" class="m-4 bg-green-900">
        <i class="fa-solid fa-plus"></i>&nbsp Criar Colaborador
    </x-button>
    <x-dialog-modal wire:model.live="showForm">
        <x-slot name="title">
            <x-validation-errors />
            Criar Colaborador
        </x-slot>
        <x-slot name="content">
            <div class="flex flex-col space-y-4">
                <x-input placeholder="nome" wire:model="form.name" />
                <x-input placeholder="email" wire:model="form.email" />
                <x-input placeholder="cpf" wire:model="form.cpf" type="text" pattern="\d*" maxlength="11" required />
                <select wire:model="form.unit_id" class="...">
                    <option value="">Selecione a Unidade</option>
                    @foreach ($units as $unit)
                        <option value="{{ $unit->id }}">{{ $unit->fantasy_name }}</option>
                    @endforeach
                </select>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('showForm', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>
            <x-button class="ms-3" dusk="confirm-password-button" wire:click="saveEmployee" wire:loading.attr="disabled">
                Criar Colaborador
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
