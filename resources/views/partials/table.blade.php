<div class="my-5">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($books as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td><a class="btn btn-info" href="/showBook/{{$item->id}}">Details</a></td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>