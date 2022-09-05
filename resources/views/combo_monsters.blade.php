@extends('/layout/master')
@section('demo')

<div class="container gx-4 gx-lg-5">
    <div class="row text-dark bg-dark gx-4 gx-lg-5 my-5 row-cols-4">
        
        @foreach ($comboname as $combocontent)
        <div class="card-body px-5 py-5">
            <div class="row text">
                <div class="row text-center">
                    <div class="card" style="width: 18rem;">
                        <strong>{{$combocontent->name}}</strong>
                        <a>{{$combocontent->remark}}</a>
                        
        @foreach ($combophoto as $photo)
                        <img class="card-img-top" src="{{( asset('/uploads/Monster/') )}}" alt="Card image" style="width:100%"> @endforeach
                       
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









