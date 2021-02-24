<div class="my-5">
    @foreach ($books as $item)
        <span class="d-none">{{$total = $total + $item->grade}}</span>
    @endforeach
    <p>Total of grades : {{$total}}</p>
</div>