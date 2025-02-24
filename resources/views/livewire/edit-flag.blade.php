<div>
    <x-dialog-modal wire:model.live="showForm">
        <x-slot name="title">
            <x-validation-errors />
            Editar Bandeira
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

            <x-button class="ms-3" dusk="confirm-password-button" wire:click="UpdateFlagAndSave" wire:loading.attr="disabled">
                Editar Bandeira
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
