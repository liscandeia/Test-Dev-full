<div>
    <x-dialog-modal wire:model.live="showForm" >
        <x-slot name="title">
            Excluir
        </x-slot>
        <x-slot name="content">
            Tem certeza de que deseja excluir o funcionário "{{ $employeeName }} "?
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('showForm', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>
            <x-button class="ms-3" dusk="confirm-password-button" wire:click="DeleteEmployee" wire:loading.attr="disabled">
                Excluir
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
