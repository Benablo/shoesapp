<div>
    <a href="{{'/logout'}}"><button class="btn btn-warning mt-3">Logout</button></a>
   <table class="table table-striped">
    <thead>
        <tr>
            <th>ID No.</th>
            <th>Brand</th>
            <th>Name</th>
            <th>Prize</th>
            <th>Color</th>
            <th>Size</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($shoes as $shoe)
            <tr>
                <td>{{$shoe->id}}</td>
                <td>{{$shoe->brand}}</td>
                <td>{{$shoe->name}}</td>
                <td>{{$shoe->prize}}</td>
                <td>{{$shoe->color}}</td>
                <td>{{$shoe->size}}</td>
                <td>
                    <a href="{{url('edit', ['shoe' => $shoe->id])}}" class="btn btn-primary"><i class="fas fa-edit">Edit</i></a>
                </td>
                <td>
                    <a href="{{url('delete', ['shoe' => $shoe->id])}}" class="btn btn-danger"><i class="fas fa-trash">Delete</i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
   </table>
</div>
