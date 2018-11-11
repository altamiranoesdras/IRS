<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{route('home')}}">Home</a>
    </li>
    <li class="breadcrumb-item active">{{$slot}}</li>
</ol>

@include('flash::message')