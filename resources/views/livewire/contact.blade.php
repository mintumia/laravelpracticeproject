<div>
    
    <input type="text" name="search" placeholder="Search Here" size="100" wire:model.debounce.2000ms="contactInfo">
    {{-- The best athlete wants his opponent at his best. --}}
    <h1 class="text-purple-700 font-semibold">{{$contactInfo}}</h1>
</div>
