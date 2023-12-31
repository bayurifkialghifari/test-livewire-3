<div>
    CANGIH COY
    <br>

    <button wire:click="confirmDelete">Delete</button>

    <input wire:model.live="search" />

    <br>
    {{ $search }}
    {{-- <button wire:click="$dispatch('test-delete')">Delete</button> --}}

    <a href="{{ route('admin.dashboard') }}" wire:navigate>Dashboard</a>

    @push('scripts')
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('confrim', (param) => {
                const ok = confirm('Are you sure?')

                console.log(param.action, ok)

                Livewire.dispatch(param.action, {id: param.id})
            })
        })

    </script>
    @endpush
</div>
