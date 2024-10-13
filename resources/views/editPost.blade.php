<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EditPost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    @php
    $post=$data['post'];

@endphp

    <form action="{{route('editPosts')}}" method="post">
        @csrf
           <div class="container2">
            <input type="hidden" name="postId" value="{{$post['id']}}">

            <h6>Text:</h6>
             <textarea name="blog_text" id="blog_text" style="width:100%;height:160px;border:none;"placeholder="Add Text" value="">{{$post['blog_text']}}</textarea>

             <h6>Blog Category:</h6>
             <textarea name="blog_category" id="blog_category" style="width:100%;height:30px;border:none;"placeholder="Blog_Type" value="">{{$post['blog_category']}}</textarea>
     
           
           <div class="container3" style="display:flex;justify-content:center;margin-top:10px;">
                <button type="Submit" class="btn btn-primary" id="post"style="width:140px;">Post</button>
               
           </div>
       </div>
     </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>