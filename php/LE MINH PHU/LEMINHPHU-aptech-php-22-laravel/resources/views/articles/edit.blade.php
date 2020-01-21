<h1>CHỈNH SỬA BÀI VIẾT </h1>
<button> <a href ="{{route('articles.index')}}"> QUAY VỀ TRANG CHỦ</a></button>
<br>
<br>
<br>

<html>
    <form action="{{route("articles.update",$article->id)}}" method="POST" >
    
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="PUT" />
    Title:<br>
    <input type="text" name="title" size="100"value="{{$article->title}}" >
    <br>
    Description:<br>
    <input type="text" name="description"  size="200" value="{{$article->description}}">
    <br>

    <br><br>
    <input type="submit" value="Chỉnh Sửa">
  </form> 
</html>
