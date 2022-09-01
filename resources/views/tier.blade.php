@extends('/layout/master')
@section('demo')
<div class="container gx-4 gx-4 gx-lg-5">
    <div class=" gx-4 gx-lg-5 my-5">
        <div class="card-container text-white bg-dark px-5 py-5">
            <div class="row text">
                <div class="row text-center">
                    <h2>Tier list</h2>
                    <p>Are you looking for a Summoners War Tier list? Well, lucky you, because, on this page, you will find exactly that. Check out our ranking of the Best Monsters in Summoners War for the Pvp meta in 2022.</p>
                    <br>
                    <div class="tier-img">
                    <img class="card-img" src="https://preview.redd.it/3nurjweayn491.jpg?width=640&crop=smart&auto=webp&s=2515da6fee9f6c9e61675dda891fef70a62a01d3" alt="Card image" style="width:58%">
                </div>
            </div>
            <a class="btn-back1" href="{{ url('/') }}">
                <i class="icon fas fa-arrow-alt-circle-left fa-3x" style="color: rgb(255, 255, 255)"></i>
            </a> 
        </div>
    </div>
</div>
<br>
<br>
<br>
@endsection