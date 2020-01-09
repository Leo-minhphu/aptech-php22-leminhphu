@foreach($users as $nguoiDung) 
{echo nguoiDung->name;}
@endforeach

@foreach($users as $nguoiDung) 
<h1>{{$nguoiDung->email}}</h1>
@endforeach