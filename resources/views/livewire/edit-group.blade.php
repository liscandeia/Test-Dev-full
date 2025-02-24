<div>
    <x-dialog-modal wire:model.live="showForm" >
        <x-slot name="title">
            Editar
        </x-slot>
        <x-slot name="content">
            <div class="flex flex-col space-y-4">
                <x-input wire:model="form.name" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('showForm', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>
            <x-button class="ms-3" dusk="confirm-password-button" wire:click="UpdateGroupAndSave" wire:loading.attr="disabled">
                Editar
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
