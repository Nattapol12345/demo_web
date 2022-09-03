@extends('/layout/master')
@section('demo')

<div class="container gx-4 gx-4 gx-lg-5">
    <div class=" gx-4 gx-lg-5 my-5">
        <div class="card-container text-white bg-dark px-5 py-5 g-1">
            
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-2">
           <div class="col-sm-4">
                    <a class="nav-link dropdown-toggle btn btn-secondary text-white " href="#" role="button" data-bs-toggle="dropdown">Combo</a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item" href="{{url('combo')}}">Combo Monster</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">อารีน่า</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">มังกร</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">ยักษ์</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">เนโคร</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">ปราการเหล็ก</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">โถงพิพากษา</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">โถงเวทย์มนตร์</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">โถงแสง</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">โถงมืด</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">โถงไฟ</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">โถงน้ำ</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">โถงลม</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">RTA</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">ทาทารัส</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">กิล 1 ทาง</a></li>
                      <li><a class="dropdown-item" href="{{url('/combo',$datas->id)}}">กิลบุก 3 ทาง</a></li>
                      <li><a class="dropdown-item" href="{{url('#')}}">กิลรับ 3 ทาง</a></li>
                    </ul>
                  </li>
                </li>
            </div>

            <div class="col-sm-4">
                <a class="nav-link dropdown-toggle btn btn-secondary text-white " href="#" role="button" data-bs-toggle="dropdown">Steamer</a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{url('combo')}}">Combo</a></li>
                  <li><a class="dropdown-item" href="{{url('#')}}">WAN KUNG</a></li>
                  <li><a class="dropdown-item" href="{{url('#')}}">Zera</a></li>
                  <li><a class="dropdown-item" href="{{url('#')}}">BankYim</a></li>
                  <li><a class="dropdown-item" href="{{url('#')}}">Blue Chanel</a></li>
                  <li><a class="dropdown-item" href="{{url('#')}}">A3GTH (One More Time)</a></li>
                  <li><a class="dropdown-item" href="{{url('#')}}">ADY AKEZ</a></li>
                  <li><a class="dropdown-item" href="{{url('#')}}">TRUE LOVE</a></li>
                  <li><a class="dropdown-item" href="{{url('#')}}">Clod</a></li>
                </ul>
              </li>
            </li>
            </div>

        </div>
    </div>
    <br>
    
            <div class="row text-center">
                <h2>{{$datas->name_en}}</h2>
                <p>{{$datas->name_th}}</p>

                

                    <div class="card col-sm-4" >
                        <img class="card-img-top" src="{{( asset('/uploads/Monster/'.$datas->photo) )}}" alt="Card image" style="width:100%">
                            <div class="card-body text-pre">
                                <h4 class="card-title">{{$datas->name_en}}</h4>
                                                    <p>{{$datas->name_th}}</p>
                                <p class="card-text ">
                                        OVERVIEW

                                        Grade ★★★★★
                                        Type Attack
                                        Badges Arena Defense, Arena Offense, Guild War Defense, Guild War Offense, Keeper
                                        Get From Mystical Scroll, Mystical Summon, Temple of Wishes, Fire Scroll, Legendary Scroll
                                        Awakened Increases Resistance by 25%
                                        Good For PvP in general
                                        Skill Up Info Worth fully skilling up with Devilmons
                                </p>
                            <br>
                        </div>
                    </div>

                    <div class=" container col-sm-8">
                        <div class="row" style="width:auto">
                            <div class="row row-cols-2">
                                <div class="col" style="width:350px">
                                    <strong>Atack</strong>
                                    <div class="sm mb-3">
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{$datas->atk}}">
                                    </div>
                                </div>
                            <div class="col" style="width:350px">
                                <strong>Critical</strong>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Cri Rate">
                                  </div>
                                </div> 
                            <div class="col" style="width:350px">
                                <strong>Defend</strong>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{$datas->def}}">
                                  </div>
                                </div> 
                            <div class="col" style="width:350px">
                                <strong>Critical Damage</strong>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Cri Dam">
                                  </div>
                                </div> 
                            <div class="col" style="width:350px">
                                <strong>Hp</strong>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{$datas->hp}}">
                                  </div>
                                </div> 
                            <div class="col" style="width:350px">
                                <strong>Resistance</strong>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Resistance">
                                  </div>
                                </div> 
                            <div class="col" style="width:350px">
                                <strong>Speed</strong>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{$datas->spd}}">
                                  </div>
                                </div>
                            <div class="col" style="width:350px">
                                <strong>Accuracy</strong>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Accuracy">
                                   </div>
                                </div>
                                
                                

                            <div class=" container col-sm-12">    
                                <div class="col col-6 col-lg-8">
                                    <img class="img-rune" src="https://hive-fn.qpyou.cn/hubweb/contents/8%20%EC%84%9C%EB%A8%B8%EB%84%88%EC%A6%88%20%EC%9B%8C_%EC%95%84%ED%8B%B0%ED%8C%A9%ED%8A%B8%20%EC%9E%A5%EC%B0%A9_EN_1595739388.PNG"  > 
                                </div>    
                            </div>

                            </div>
                        </div>
                    </div>
            </div>
            
                <a class="btn-back" href="{{ url('/list') }}">
                    <i class="icon fas fa-arrow-alt-circle-left fa-3x" style="color: rgb(255, 255, 255)"></i>
                </a> 

        </div>
    </div>
</div>
<br>
<br>
<br>
@endsection