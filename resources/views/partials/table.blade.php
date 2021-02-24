<div class="my-5">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Text</th>
            <th scope="col">Grade</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($books as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->text}}</td>
                <td>{{$item->grade}}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>