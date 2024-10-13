
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StammpPosts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color:#f0f0f0;">
    <nav class="navbar navbar-expand-lg "style="background-color:#AA5DEA" >
        <div class="container-fluid">
            <img src="https://img.freepik.com/premium-vector/blog-bubble-white-background-internet-technology-vector-logo-communication-technology_100456-7621.jpg"  style="border-radius:50%; margin-right:10px;" alt="" height="35px" width="63px" style="margin:0px 10px 0px 3px;">
          <a class="navbar-brand" href="#"><h5>StammpBlogs</h5></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:450px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/registration">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/login">Login</a>
              </li>
              @php
              $allData = session()->all();
            @endphp
              @if(isset($allData['user_id']))
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('profile.view')}}">Profile</a>
              </li>
              @endif
            </ul>
           
            
              <!-- loginindicator -->
           @if(isset($allData['user_id']))
               
           <button type='button' class='btn btn-secondary position-relative' style = 'border-radius: 100px; width:60px; margin-right:10px'>
            {{ $allData['user_id'] }}
           <span class='position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle' >
           <span class='visually-hidden'>New alerts</span>
           </span>
           </button>
        @endif
       <!-- LOGININDICATOR -->
    
                <form   action="route{{'searches'}}" method="get" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
    
           <!-- logoutbutton -->
 @if(isset($allData['user_id']))
       
 <button type='button' class='btn btn-light position-relative' style = 'border-radius: 100px; margin-left:10px'><a href='{{route('user.sessionend')}}'>Logout</a> 
   </button>
@endif
<!-- LOGOUTBUTTON -->
          </div>
        </div>
      </nav>
      <img src="https://thumbs.dreamstime.com/b/blog-information-website-concept-workplace-background-text-view-above-127465079.jpg" alt="" height="500px" width="100%" style="margin:0px 10px 0px 3px;">
       <br>
       <br>
       

      {{-- blogs --}}
      @if(isset($blog))
        @php 
        $category=$blog['1']['blog_category'];
          @endphp
      <h2 style="margin-left:20px;">{{$category}}</h2>
      
    

      <div class="scrollable" style="display:flex; margin-left:40px;  margin-right:40px;overflow-x:auto;scrollbar-width:none">
        @foreach($blog as $posts)
        @foreach($posts as $key=> $post)
  
      <div class="card" style="min-width:300px;margin:5px; border:none;">
        <img class="card-img-top" src="../Images/itemsimages/clothes/child.jpg" class="d-block w-100" alt="Card image cap" style=" min-width:300px;min-height:300px;max-width:300px;max-height:300px">
        <div class="card-body">
        <div class="container1" style="display:flex;justify-content:center;">
        <h5 class="card-title" >{{$post['blog_category']}}</h5> </div>
          <p class="card-text">{{$post['blog_text']}}</p>
        </div>
      </div>
      @endforeach
      @endforeach
      @endif
      <a class="scroll-carousel_carouselControl__Id0y9 scroll-carousel_carouselHorizontalControl__1gDln scroll-carousel_feedRight__3tG5G" data-id="carouselControlFeedNext"></a>
      
      </div>

    
      <hr>
      <br>


      <h2 style="margin-left:20px;">Luxury Clothes</h2>
<div class="scrollable" style="display:flex; margin-left:40px;  margin-right:40px;overflow-x:auto;scrollbar-width:none">
<div class="card" style="min-width:300px;margin:5px; border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/child.jpg" class="d-block w-100" alt="Card image cap" style=" min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/shirt.jpeg" class="d-block w-100 " alt="Card image cap" style="min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body" >
    <div class="container1" style="display:flex;justify-content:center;">
    <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/frock.jpeg" class="d-block w-100" alt="Card image cap" style="min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/girlfrock.jpg" class="d-block w-100" alt="Card image cap" style="min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/hudi.jpg" class="d-block w-100" alt="Card image cap" style="min-width:300px;min-height:300px;max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<div class="card" style="min-width:300px;margin:5px;border:none;">
  <img class="card-img-top" src="../Images/itemsimages/clothes/saree.jpeg" class="d-block w-100 " alt="Card image cap" style="max-width:300px;max-height:300px">
  <div class="card-body">
  <div class="container1" style="display:flex;justify-content:center;">
  <h5 class="card-title" >Card title</h5> </div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"style="margin-left:80px;">Add to Cart</a>
  </div>
</div>
<a class="scroll-carousel_carouselControl__Id0y9 scroll-carousel_carouselHorizontalControl__1gDln scroll-carousel_feedRight__3tG5G" data-id="carouselControlFeedNext"></a>

</div>
<hr>
<br>

{{-- footer --}}

<div class="card text-center  bg-secondary"style="border:none;color:white;border-radius:0px;">
    <div class="card-body">
      <h5 class="card-title">Thanks for visiting</h5>
      <p class="card-text">Be a family of blogs</p>
      <a href="#" class="btn btn-primary">Premium Membership</a>
    </div>
    <div class="card-footer bg-dark ">
      All right reserved &copy created by Ashish Painuly
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>