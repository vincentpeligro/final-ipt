<div>
    <div class="container mt-2">
        <h1 style="font-size: 25px; font-weight: 400;">Users</h1>
        @include('livewire.modals.admin-modal')
        @if (session('message'))
            <div class="alert alert-success text-black text-center" id="messagee">{{ session('message') }}</div>
        @endif
        <input type="search" class="form-control float-start mx-2 mb-3" style="width: 250px;" placeholder="Search"
            wire:model.lazy="search">
        <div class="card-body">
            <table class="table table-striped shadow text-center">
                <thead style="background-color: blue; color:white;">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>
                                <a href="" class="btn btn-warning" id="ic" title="Edit"
                                    data-toggle="modal" data-target="#update-modal-users"
                                    wire:click="editUsers({{ $user->id }})">Edit</a>
                                <a href="" class="btn btn-danger" id="ic" title="Delete"
                                    data-toggle="modal" data-target="#delete-modal-users"
                                    wire:click="delete({{ $user->id }})">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    @if ($users->count() == 0)
                        <td colspan="4" class="text-center">
                            No users found in this table.
                        </td>
                    @endif
                </tbody>
            </table>
        </div>
        <div>
            {{ $users->links() }}
        </div>
    </div>
</div>
<style>
    .close {
        border-radius: 50%;
        width: 25px;
        border: none;
    }

    .close span {
        color: black;
    }

    .close:hover {
        background-color: rgb(214, 211, 211);
    }

    .title3 {
        margin-left: 8%;
    }

    .title1 {
        margin-left: 38%;
    }

    .title2 {
        margin-left: 35%;
    }
</style>
