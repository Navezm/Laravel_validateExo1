<div class="jumbotron">
    <h1 class="display-4">{{$show->name}}</h1>
    <p class="lead">{{$show->text}}</p>
    <p>{{$show->grade}}</p>
    <hr class="my-4">
    <div class="d-flex">
        <a class="btn btn-danger btn-lg" href="/deleteBook/{{$show->id}}" role="button">Delete</a>
        <a class="btn btn-primary btn-lg ml-3" href="/editBook/{{$show->id}}" role="button">Edit</a>
    </div>
</div>