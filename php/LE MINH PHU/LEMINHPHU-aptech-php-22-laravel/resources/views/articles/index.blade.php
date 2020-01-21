BẢNG ĐỀ MỤC BAI VIET
<br>
<br>
<button> <a href ="{{route("articles.create")}}"> TAO BAI VIET MOI</a></button>
@foreach ($articles as $baiviet)
<h3> {{$baiviet->id}}-{{$baiviet->title}}</h3>
<button><a href="{{route("articles.show",$baiviet->id)}}"method="get">Xem</a></button>
<button><a href= "{{route("articles.edit",$baiviet->id)}}" method="get">Sửa</a></button>
<br>
<br>

@endforeach