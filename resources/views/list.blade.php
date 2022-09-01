@extends('/layout/master')
@section('demo')

<div class="container gx-4 gx-lg-5">
    <div class="row text-dark bg-dark gx-4 gx-lg-5 my-5 row-cols-4">
        
        @foreach ($info as $infor)
        <div class="card-body px-5 py-5">
            <div class="row text">
                <div class="row text-center">
                    <div class="card" style="width: 18rem;">
                        <strong>{{$infor->name_th}}</strong>
                        <a>{{$infor->name_en}}</a>
                        <img href="{{$infor->photo}}" class="card-img-top" alt="">
                        <a class="priview" href="{{ url('preview',$infor->id) }}">
                            <i class="fas fa-search fa-2x" style="color: rgb(0, 0, 0)"></i>
                        </a> 
                    </div>
                </div>
            </div>
        </div>
            @endforeach

            <a class="btn-back1" href="{{ url('/') }}">
                <i class="icon fas fa-arrow-alt-circle-left fa-3x" style="color: rgb(255, 255, 255)"></i>
            </a> 
    </div>
    
    
    

</div>
<br>
<br>
@endsection