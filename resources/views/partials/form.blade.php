<form action="/addBook" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Text</label>
        <input type="text" name="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Grade</label>
        <input type="number" name="grade" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>