<div wire:ignore.self>

    @if ($currentPage == PAGELIST)
        @include("livewire.utilisateurs.liste")
    @endif
    @if ($currentPage == PAGECREATEFORM)
        @include("livewire.utilisateurs.create")
    @endif
    @if ($currentPage == PAGEEDITFORM)
        @include("livewire.utilisateurs.edit")
    @endif
</div>