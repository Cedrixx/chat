<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <ul class="list-group w-75 mx-auto mt-3 container-fluid">
        @foreach ($users as $user)


        <li class="list-group-item list-group-item-action" wire:click='checkconversation({{$user->id}})'> {{$user->first_name}}</li>
        
        @endforeach
    </ul>
</div>