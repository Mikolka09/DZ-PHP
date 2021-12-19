<div class="container">
    <h2 class="text-center fw-bold">LIST USERS</h2>
    <table class="table table-success table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td><a data-toggle="tooltip" data-placement="top" title="User comments"
                       data-bs-toggle="modal" data-bs-target="#modalCom">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
