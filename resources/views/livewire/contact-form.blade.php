<div>
@if($check == true)

        <h class="text-lg font-bold">Please Fillup below Form.</h>

        <form wire:submit.prevent="submit" method="post">
            @csrf
            @method('post')
            <input type="text" name="name" placeholder="please Enter Name" wire:model="name">
            <br>
            <br>
            <input type="text" name="mobile" placeholder="please Enter mobile number" wire:model="mobile">
            <br>
            <br>
            <input type="email" name="email" placeholder="please Enter valid Email" wire:model="email">


            <button class="border-2 p-3 m-4 font-bold text-white border-blue-800 rounded-lg bg-green-600" type="submit">Save</button>
        </form>



    @else
        <livewire:contact/>

@endif

</div>
