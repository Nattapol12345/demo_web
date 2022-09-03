@extends('/layout/master')
@section('demo')

<div class="container gx-4 gx-4 gx-lg-5">
    <div class=" gx-4 gx-lg-5 my-5">
        <div class="card-container text-white bg-dark px-5 py-5">
            <header class="text-center">กิลรับ 3 ทาง</header>
            <br>
                <div class="card-body bg-white">
                    <div class="card-body px-5 py-5 bg-dark">
                        <div class="row row-cols-5 row-cols-lg-2">
                            <div class="card-body px-5 py-5">
                                <div class="row text">
                                    <div class="row text-center text-dark">
                                        <div class="card" style="width: 18rem;">
                                            <strong>{{$datas1->name_th}}</strong>
                                                <a>{{$datas1->name_en}}</a>
                                            <img src="{{( asset('/uploads/Monster/'.$datas1->photo) )}}" class="card-img-top" alt="Image">
                                            <a class="priview" href="{{ url('preview',$datas1->id) }}">
                                                <i class="fas fa-search fa-2x" style="color: rgb(0, 0, 0)"></i>
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>            
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>



@endsection