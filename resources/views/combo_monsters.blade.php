@extends('/layout/master')
@section('demo')
<div class="container gx-4 gx-lg-5">
    <div class="row text-center text-white bg-dark gx-4 gx-lg-5 my-5 row-cols-1">
        <div class="card-body px-5 py-5">
            @foreach($combos as $row_name)
            @endforeach
        <strong>{{$row_name->name_combo}}</strong>
        </div>
    </div>
</div>

<div class="card container bg-dark gx-4 my-5 gx-lg-5">
    <div class="row text-dark bg-dark gx-4 gx-lg-5 my-5 row-cols-5">
        
        @foreach($combos as $row_name)
        <div class="card-body">
            <div class="row text">
                <div class="row text-center">
                    <div class="card">
                        <strong>{{$row_name->nickname}}</strong>
                            <div class="card-body">
                                <img class="card-img-top" src="{{( asset('/uploads/Monster/'.$row_name->photo) )}}" alt="Card image" style="width:100%">
                            </div>
                            <a class="priview" href="{{ url('preview',$row_name->id) }}">
                                <i class="fas fa-search fa-2x" style="color: rgb(0, 0, 0)"></i>
                            </a> 
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <a class="btn-back1" href="{{ url('/combo') }}">
            <i class="icon fas fa-arrow-alt-circle-left fa-3x"  style="color: rgb(255, 255, 255)"></i>
        </a> 
    </div>
</div>
<br>
<br>
@endsection









