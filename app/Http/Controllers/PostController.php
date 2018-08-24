<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Post;
use Auth;

class PostController extends Controller
{
     public function addPost(Request $data){
   	$this->Validate($data, [
'title'=>'required',
'plofile' => 'max:5120',
//'plofile'=>'required|image|mimes:jpeg,png,jpg,gif,svg,png',
//'other_image'=>'image|mimes:jpeg,png,jpg,gif,svg,png',
'content'=>'required',
'more'=>'required',
'category'=>'required'
]);
    $user=Post::where(['post_title'=>$data->Input('title')])->first();
       if (empty($user->post_title)) {
  

   	$posts= New Post;
   	$posts ->user_id= Auth::user() ->id;
   	$posts ->post_title = $data->Input('title');
   	$posts ->post_content = $data->Input('content');
   	$posts ->category = $data->Input('category');
      $posts ->more = $data->Input('more');
      $posts ->tags = $data->Input('tags');
   	//upload picture here
      $image = $data->file('plofile');
                $imageName= time(). $image->getClientOriginalName();
                $imagePath='Posts';
                $image->move($imagePath, $imageName);

   		$posts ->post_image = $imageName;
   	


         //upload more picture here
   			//upload picture here

		$posts ->Save();

		return redirect('/home')-> with('status','Post Successfully Added');

   }
   return redirect('/home')-> with('status','Post Aleady Exist!');
 }
}
