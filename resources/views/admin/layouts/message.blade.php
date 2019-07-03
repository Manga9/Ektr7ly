<br><br>
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class='btn btn-danger'> {{ $error }} </div>
        <br><br>
    @endforeach
@endif

@if (session()->has('message'))
    <div class='btn btn-success'> {{ session('message') }} </div>
@endif
