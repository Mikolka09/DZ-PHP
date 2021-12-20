<div class="container">
    <table class="table table-success table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Comment</th>
            <th scope="col">Created</th>
        </tr>
        </thead>
        <tbody>
        @foreach($comments as $iter)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$iter->comment}}</td>
                <td>{{$iter->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


