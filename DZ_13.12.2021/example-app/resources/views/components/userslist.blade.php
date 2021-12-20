<script>
    function modalWindow(id){
        `<x-modal-window id=${id}/>`
    }
</script>
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
                <td><a style="cursor: pointer" data-toggle="tooltip" data-placement="top" title="User comments"
                       onclick="modalWindow({{$user->id}})">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

