<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use DB;
use App\Comment;
use Auth;
use App\Requests;
use App\Branche;
use App\Anouncements;
use App\Wss;
use App\Subscriber;
use App\Payment;
use App\User;
use Carbon;



class IndexController extends Controller
{
   public function index(){
   	$posts=Post::orderBy('id', 'desc')->paginate(4);
        $blogs=Post::paginate(4);
		$category=DB::table('posts')->distinct()->get();
		$archive=DB::table('posts')->orderby('created_at','DESC')->limit(6)->get();
        $anouncement=DB::table('anouncements')
                    ->orderby('created_at','DESC')
                    ->whereBetween('deadline' , [Carbon\Carbon::now(), Carbon\Carbon::now()->addDays(2)])
                    ->get();
        $notif=Anouncements::whereBetween('deadline' , < Carbon\Carbon::now())
                              ->get();
		
		$recent = DB::table('posts')
                ->orderBy('id', 'desc')
                ->limit(4)
                ->get();
                 $branche=Branche::orderby('id','desc')->limit(2)->get();
                 $branch=Branche::orderby('id','desc')->limit(4)->get();
                 $bra=Branche::orderby('id','asc')->limit(4)->get();
                 $tang=Anouncements::all();

	return view('index',compact('posts','blogs','recent','category','branche','anouncement','archive','branch','notif','bra','tang'));

	}

  public function blog($post_id){
    $posts=Post::where('id','=',$post_id)->first();
    $category=DB::table('posts')->distinct()->get();
    $commentctr=DB::table('comments')->where('post_id','=',$post_id)->count();
    $comment=DB::table('comments')->where('post_id','=',$post_id)->orderby('created_at','DESC')->get();

    $archive=DB::table('posts')->orderby('created_at','DESC')->limit(6)->get();

    $recent = DB::table('Posts')
                ->orderBy('id', 'desc')
                ->limit(5)
                ->get();
          
     return view('blog',['posts'=>$posts,'recent'=>$recent,'category'=>$category,'commentctr'=>$commentctr,'comment'=>$comment,'archive'=>$archive]);

  }
      public function addcomment(Request $data,$comment_id){
         $this->validate($data,[
    'comment'=>'required',
    'name'=>'required',
    'email'=>'required',
    
    ]);
    
  $comment= New Comment;
  if (Auth::user()) {
 $comment ->comment = $data->Input('comment');
    $comment ->name = 'Admin';
    $comment ->s_email =Auth::user()->email;
    $comment ->post_id = $comment_id;
    $comment ->Save();
     return back()->with('response','your comments is successfully published! thank you!');
  }
  else{
     $comment ->comment = $data->Input('comment');
    $comment ->name = $data->Input('name');
    $comment ->s_email = $data->Input('email');
    $comment ->post_id = $comment_id;
    $comment ->Save();
     return back()->with('response','your comments is successfully published! thank you!');

  }
   

  }
   public function contact()
    {
        return view('contact');
    }

     public function water()
    {
      $branchs=DB::table('branches')
            ->leftJoin('users', 'branches.br_name', '=', 'users.branch')
            ->select('users.id','branches.br_name')
            ->get();

            $branche=branche::all();
     
        return view('water', compact('branche','branchs'));
    }

     public function request(Request $data)
    {
           $this->validate($data,[
    'content'=>'required',
    'fname'=>'required',
    'lname'=>'required',
    'brname'=>'required',
    'province'=>'required',
    'district'=>'required',
    'sector'=>'required',
    'cell'=>'required',
    'village'=>'required',
    'phone'=>'required',
    'nid'=>'required|max:16',
    'line'=>'required',
    
    ]);

    $request= New Requests;
    $request ->fname = $data->Input('fname');
    $request ->lname = $data->Input('lname');
    $request ->brname = $data->Input('brname');
    $request ->province = $data->Input('province');
    $request ->sector = $data->Input('sector');
    $request ->line = $data->Input('line');
    $request ->district = $data->Input('district');
    $request ->cell = $data->Input('cell');
    $request ->village = $data->Input('village');
    $request ->phone = $data->Input('phone');
    $request ->nid = $data->Input('nid');
    $request ->bio = $data->Input('content');
    $request ->Save();
     return back()->with('response','Your Request is successfully sent to ayateke star! We will be back to you soon! Thank you!');
    }


  public function branches(){
    $posts=Post::orderBy('id', 'desc')->get();
    $category=DB::table('posts')->distinct()->get();
        $branche=Branche::orderby('br_name','asc')->get();
    
    $recent = DB::table('posts')
                ->orderBy('id', 'desc')
                ->limit(4)
                ->get();

     return view('branches',['posts'=>$posts,'recent'=>$recent,'category'=>$category,'branche'=>$branche]);

  }

      public function team(){
    $posts=Post::orderBy('id', 'desc')->get();
    $category=DB::table('posts')->distinct()->get();
    
    $recent = DB::table('posts')
                ->orderBy('id', 'desc')
                ->limit(4)
                ->get();

     return view('team',['posts'=>$posts,'recent'=>$recent,'category'=>$category]);

  }
   public function searchin(Request $request){

$posts=Post::where('post_title','like',"%{$request->get('search')}%")->orderby('id','desc')->paginate(5);
$blogs= Post::paginate(5);
$recent = DB::table('Posts')
                ->orderBy('id', 'desc')
                ->limit(4)
                ->get();
$count=Post::where('post_title','like',"%{$request->get('search')}%")->orderby('id','desc')->count();
return view('result',compact('posts','blogs','recent','count'));  
    
    }


  public function services(){
    $posts=Post::orderBy('id', 'desc')->get();
    $category=DB::table('posts')->distinct()->get();
    
    $recent = DB::table('posts')
                ->orderBy('id', 'desc')
                ->limit(4)
                ->get();

     return view('service',['posts'=>$posts,'recent'=>$recent,'category'=>$category]);

  }

    public function leak(){
      $branch=branche::all();
      $branchs=DB::table('users')
            // ->leftJoin('wsses', 'users.id', '=', 'wsses.user_id')
            // ->select('users.branch','users.id','wsses.user_id')
            ->get();
     return view('leak',compact('branch','branchs'));

  }
    public function findproductsub(Request $request){
      $data=wss::select('w_name','id')->where('user_id','=',$request->id)->take(100)->get();

     return response()->json($data);

  }

  public function subscriber(Request $data){

           $this->validate($data,[
    'email'=>'required',
    
    ]);

    $request= New Subscriber;
    $request ->email = $data->Input('email');
    
    $request ->Save();

     return back()->with('response','Thank you for subscribing to us We will send to you our latest updates!');

    

  }
    
    function fetch(Request $request){
       $data=wss::select('w_name','id')->where('user_id','=',$request->id)->take(100)->get();

     return response()->json($data);
      

    }

    function notification($id){
     $posts=Anouncements::where('id','=',$id)->get();
     $it=Anouncements::where('id','!=',$id)                        
                        ->orderby('id','desc')
                        ->get();
$recent = DB::table('posts')
                ->orderBy('id', 'desc')
                ->limit(4)
                ->get();

return view('notification',compact('posts','recent','it'));  

    }

    function about(){
      return view('about');
    }

    function tarif(){
      return view('tarif');
    }


    function information(){
      $account=Payment::all();
      return view('information',compact('account'));
    }

     function agreement(){

      return view('agreement');
    }
    


}
