@extends('/layout/master')
@section('demo')

<div class="container gx-4 gx-lg-5">
    <div class="row text-dark bg-dark gx-4 gx-lg-5 my-5 row-cols-4">
        
        @foreach ($com as $namecombo)
        <div class="card-body px-5 py-5">
            <div class="row text">
                <div class="row text-center">
                    <div class="card" style="width: 18rem;">
                        <strong>{{$namecombo->name}}</strong>
                        <a class="priview" href="{{route('combo_monsters',$namecombo->id)}}">
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