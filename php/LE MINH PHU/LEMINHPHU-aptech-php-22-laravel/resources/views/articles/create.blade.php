<h1>TẠO BÀI VIẾT MỚI</h1>
<br>
<button><a href="{{route("articles.index")}}">QUAY LAI TRANG CHU </a></button>
    <br>
    <br>
<form action="{{route("articles.store")}}" method="POST">
<Input type="hidden" name="_token" value="{{csrf_token()}}">
    Title:<br>
    <input type="text" name="title" value=""><br>
    Desciption:<br>
    <input type="text" name="description" size="200" value="">
    <br>
    <br>
    <input type="submit" value="Tạo bài viết">
</form>


