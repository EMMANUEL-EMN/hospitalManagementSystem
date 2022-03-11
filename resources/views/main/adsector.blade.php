<div class="addheading">
    <h1>FEATURED NEWS AND INFORMATION</h1>
</div>
<div class="d-flex justify-content-between">
    @foreach ($advert as $c)
        <div class="advert">
            <div>
                <center>
                    <img src="{{ url('storage/images/'.$c->image)}}" alt="" id="img">
                </center>
            </div>
            <center>
                <div class="p-2" id="cont">
                    <h5 style="color: #227ad8; font-weight:900;">{{ $c->description }}</h5>
                    <br>
                    <p>Date : {{ $c->created_at }}</p>
                </div> 
            </center>
        </div>
    @endforeach
</div>




