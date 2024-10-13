<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\login; 
use App\Http\Requests\Registration; 
use App\Http\Requests\blogs; 
use Illuminate\Support\Facades\hash; 


use App\Models\User;
use App\Models\Blog;
class userController extends Controller
{
    
//login

public function Login(login $request){
    try{
    
        $user =User::where(['email'=>$request['email']])->first();
        if($user && Hash::check($request['password'], $user->password)){
            session()->put('user_id',$user['id']);
            return view('homePage');
        }
        
    }
    catch(\Exception $err){
             return view('serverError');
    }
}


//Registration

public function Registration(Registration $request){
    try{
    
        $data=[
            'name' =>$request ->name,
            'user_name'=>$request->user_name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
          ];
          $success=User::create($data);
          if($success == true){
                 return view('homePage');
          }
        
    }
    catch(\Exception $err){
             return view('serverError');
    }
}

  //to end session
  public function sessionend(){
    session()->flush();
    return view('homePage');
}



//addBlog

public function addBlog(blogs $request){
           try{
            $allData=session()->all();
            $data=[
                'blog_text' =>$request->blog_text,
                'blog_category'=>$request->blog_category,
                'user_id'=>$allData['user_id'],
            
              ];

              $success=Blog::create($data);
            
          if($success == true){
            return view('profileView');
          }
        } catch(\Exception $err){
            return view('serverError');
   }
}


//blog view
public function profileView(){
         try{
            $allData=session()->all();
            if(isset($allData['user_id'])){
                $datas =Blog::where(['user_id'=>$allData['user_id']])->orderBy('id', 'asc')->get();  
                $data= compact('datas');
            }else{
                $datas =Blog::where(['user_id'=>$allData['user_id']])->orderBy('id', 'asc')->get(); 
                $data= compact('datas');
            }
             return view('profileView')->with(['data' => $data]);
         }catch(\Exception $err){
            return view('serverError');
   }
}
            

//edit post
public function editPost($postId){
    try{
        $post =Blog::where(['id'=>$postId])->first();  
        
        $data=compact('post');
        return view('editPost')->with(['data'=>$data]);
    
}catch(\Exception $err){
    return view('serverError');
}

}


public function editPosts(blogs $request){
    try{
    $allData=session()->all();
    $blogData =Blog::where(['id'=>$request['postId']])->first();  
    $blogData->blog_text = $request['blog_text'];
    $blogData->blog_category = $request['blog_category'];
   $success= $blogData->save();

    
  if($success == true){
    return redirect()->route('profile.view');

  }
} catch(\Exception $err){
    return view('serverError');
}
}


//delete post
public function deletePost($postId){
    $blogData =Blog::where(['id'=>$postId])->first();  
    $blogData->delete();
    return redirect()->back();

}



//search function
    
public function searches(Request $request){    
    $search = $request['search'] ?? "";     
    if ($search != ""){      
        $blogs =Blogs::where('blog_category','lIKE',"%$search%")->get();  
        
    }
   
   
  $blog=compact('blogs','search');
  return view('homePage')->with($blog);
}

}