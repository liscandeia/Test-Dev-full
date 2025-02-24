<div>
    <x-button @click="$wire.set('showForm',true)" class="m-4 bg-green-900"><i class="fa-solid fa-plus"></i>
        &nbsp   Criar Bandeira </x-button>
    <x-dialog-modal wire:model.live="showForm">
        <x-slot name="title">
            <x-validation-errors />
            Criar Bandeira
        </x-slot>
        <x-slot name="content">
            <div class="flex flex-col space-y-4">
                <x-input placeholder="nome" wire:model="form.name" />
                <select wire:model="form.group_id" class="...">
                    <option value="">Selecione o Grupo Econômico</option>
                    @foreach ($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                </select>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('showForm', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ms-3" dusk="confirm-password-button" wire:click="SaveFlag" wire:loading.attr="disabled">
                Criar Bandeira
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
