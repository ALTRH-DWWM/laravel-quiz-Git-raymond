{{view('layout.header')}}

<div class="row">
    <div class="col-12">{{$user->firstname}}</div>
    <div class="col-12">{{$user->lastname}}</div>
    <div class="col-12">{{$user->email}}</div>
</div>

{{view('layout.footer')}}