<div class="container">

    {{-- call component with passing data --}}
    {{-- @livewire('contact-create', ['contacts' => $contacts]) --}}
    {{-- end livewire component --}}

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    @if ($statusUpdate)
        @livewire('contact-update')
    @else
        @livewire('contact-create')
    @endif


    <table class="table table-responsive">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($contacts as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->phone}}</td>
                    <td>
                        <button wire:click="getContact({{$item->id}})" class="btn btn-primary">Edit</button>
                        <button wire:click="hapus({{$item->id}})" class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
