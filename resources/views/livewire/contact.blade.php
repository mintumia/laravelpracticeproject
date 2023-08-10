<div>
    @if($newcontact == true)

            <h1>Contact Page</h1>
        <button class="border-2 p-3 m-4 font-bold text-white border-blue-800 rounded-lg bg-purple-600" wire:click="createContact">New Contact</button>
       {{-- <input type="text" name="search" placeholder="Search Here" size="100" wire:model.debounce.2000ms="contactInfo">
        --}}{{-- The best athlete wants his opponent at his best. --}}{{--
        <h1 class="text-purple-700 font-semibold">{{$contactInfo}}</h1>--}}
        {{--<h1>{{$newcontact}}</h1>--}}


    @else
        <livewire:contact-form/>

    @endif

    </div>



