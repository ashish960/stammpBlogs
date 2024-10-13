
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color:#f0f0f0;">
    <nav class="navbar bg-body-secondary">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="https://img.freepik.com/premium-vector/blog-bubble-white-background-internet-technology-vector-logo-communication-technology_100456-7621.jpg"  style="border-radius:50%; margin-right:10px;" alt="" height="35px" width="63px" style="margin:0px 10px 0px 3px;">
            <button type="button" class="btn btn-outline-primary" style="margin-left:500px" data-bs-toggle="modal" data-bs-target="#addPosts" >+ Create Blog</button>
                <a class="nav-link active" aria-current="page" href="/">Home</a>
        
          </a>
        </div>
      </nav>
      @php
       $allData = session()->all();
       
      @endphp
      <div class="container"style="width:100vw;display:flex;justify-content:center;align-item:center;">
               <h1>Your Blogs</h1>
               <h1> {{ $allData['user_id'] }}</h1>
      </div>
        <br>


        
            @foreach($data as $posts)
               @foreach($posts as $key=> $post)
      <div class="blogContainer">

        <div class="abc" style=" margin-left:50px;width:90vw;background-color:white;border-radius:10px;display:flex;">
            <img src="https://img.freepik.com/premium-vector/blog-bubble-white-background-internet-technology-vector-logo-communication-technology_100456-7621.jpg"  style="height:100%;width:30%;display:inline-block;"class="card-img-top" alt="...">
            <div class="card-body" style="width:70vw;height:50vh;">
                <textarea name="text" id="text" style="width:100%;border:none;margin-top:4px; height:80%;">{{$post['blog_text']}}</textarea>
              <a href="{{route('post.edit',$post['id'])}}"> <button type="button" class="btn btn-primary">Edit</button></a>
              <a href="{{route('post.delete',$post['id'])}}"> <button type="button" class="btn btn-danger">Delete</button></a>

            </div>
          </div>

      </div>

      <br>
      @endforeach
      @endforeach

{{--add posts  --}}

<!-- Modal -->
<style>
    .blog_image {
        cursor: pointer;
        width: 100%;
        margin: 0;
        padding: 0;
        height: 200px;
        border-radius: 4px;
        background-color: cornflowerblue;
    }
   
    .hidden {
        display: none;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<div class="modal fade" id="addPosts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h1 class="modal-title fs-5" id="exampleModalLabel">ADD BLOG</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  
  <form action="{{route('addBlog')}}" method="post">
   @csrf
      <div class="container2">
        <textarea name="blog_text" id="blog_text" style="width:100%;height:160px;border:none;"placeholder="Add Text" value=""></textarea>
        <textarea name="blog_category" id="blog_category" style="width:100%;height:30px;border:none;"placeholder="Blog_Type" value=""></textarea>

      
      <div class="container3" style="display:flex;justify-content:center;margin-top:10px;">
        
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right:10px;">Close</button>
           <button type="Submit" class="btn btn-primary" id="post"style="width:140px;">Post</button>
          
      </div>
  </div>
</form>
</div>
</div>
</div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>