<div>
    <x-dialog-modal wire:model.live="showForm">
        <x-slot name="title">
            <x-validation-errors />
            Editar Bandeira
        </x-slot>
        <x-slot name="content">
            <div class="flex flex-col space-y-4">
                <x-input placeholder="nome fantasia" wire:model="form.fantasy_name" />
                <x-input placeholder="razão social" wire:model="form.corporate_name" />
                <x-input placeholder="cnpj" wire:model="form.cnpj" type="text" pattern="\d*" maxlength="14" required />
                <select wire:model="form.flag_id" class="...">
                    <option value="">Selecione o Grupo Econômico</option>
                    @foreach ($flags as $flag)
                        <option value="{{ $flag->id }}">{{ $flag->name }}</option>
                    @endforeach
                </select>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('showForm', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ms-3" dusk="confirm-password-button" wire:click="UpdateUnitAndSave" wire:loading.attr="disabled">
                Editar Bandeira
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
