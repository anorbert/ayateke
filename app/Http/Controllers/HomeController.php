<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Messages;
use App\Branche;
use App\Requests;
use App\Anouncements;
use Auth;
use App\user;
use App\Wss;
use App\Appointment;
use App\Payment;
Use App\Subscriber;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $Messagectr=Messages::count();
         $mess=Messages::orderby('id','desc')->get();
        $messs=Messages::orderby('id','desc')->limit(4)->get();
        $employee=Branche::sum('employees');
         $ann=Anouncements::where('type','=','users')->count();
         $notif=Anouncements::where('type','=','users')->get();
        $chatctr=Messages::max('id');
        $quickchat=Messages::where('id','=',$chatctr)->get();
        $user=user::all();
        $Subscribers=Subscriber::count();
        
        if (Auth::user()->role!='User') {
          
$branche=Branche::all();
$reques=Requests::where('action','=','pending')->get();
$req=Requests::where('action','=','pending')->count();
$appr=Requests::where('action','=','approved')->count();
       

        }
        else{
            $branche=Branche::where('br_name','=',Auth::user()->branch);
            $reques=Requests::where('action','=','pending')->where('brname','=',Auth::user()->branch)->get();
            $req=Requests::where('action','=','pending')->where('brname','=',Auth::user()->branch)->count();
            $appr=Requests::where('action','=','approved')->where('brname','=',Auth::user()->branch)->count();

        }


        return view('home',compact('Messagectr','mess','branche','req','messs','appr','reques','employee','user','ann','notif'));
    }
    //dealing with branches

         public function showbranche()
    {
        $Messagectr=Messages::count();
        $branche=Branche::all();
        $mess=Messages::orderby('id','desc')->get();
        $ann=Anouncements::where('type','=','users')->count();
         $notif=Anouncements::where('type','=','users')->get();

        return view('Admin.branch',compact('Messagectr','mess','branche','ann','notif'));
    }



     public function addbranche(Request $data)
    {
$this->Validate($data, [
'names'=>'required',
'plofile' => 'max:5120',
'manager'=>'required',
'contact'=>'required',
'population'=>'required',
'people'=>'required',
'wss'=>'required',
'employee'=>'required'
]);
$user=Branche::where(['br_name'=>$data->Input('names')])->first();
       if (empty($user->br_name)) {


    $posts= New Branche;
    $posts ->br_name = $data->Input('names');
    $posts ->br_manager = $data->Input('manager');
    $posts ->br_contact = $data->Input('contact');
    $posts ->population = $data->Input('population');
    $posts ->peoples = $data->Input('people');
    $posts ->wss = $data->Input('wss');
    $posts ->employees = $data->Input('employee');
    //upload picture here
  //upload picture here
      $image = $data->file('plofile');
                $imageName= time(). $image->getClientOriginalName();
                $imagePath='images';
                $image->move($imagePath, $imageName);  

        $posts ->images = $imageName;
        $posts ->Save();

        return back()->with('status','Branches Added Successfully!');
    }
     return back()->with('status','Branches Aleady Exist!');
    }

// anouncements here
     public function anouncement()
    {
        $Messagectr=Messages::count();
        $reques=Requests::all();
        $mess=Messages::orderby('id','desc')->get();
        $ann=Anouncements::where('type','=','users')->count();
         $notif=Anouncements::where('type','=','users')->get();

        return view('Admin.Anouncement',compact('Messagectr','mess','ann','reques','notif'));
    }
     public function addanouncement(Request $data)
    {
  $this->Validate($data, [
'editor1'=>'required',
'dead'=>'required',
'type'=>'required',
'title'=>'required',
]);
  $user=Anouncements::where(['title'=>$data->Input('title'),'anouncement'=>$data->Input('editor1')])->first();
       if (empty($user->anouncement)) {

$posts= New Anouncements;
$posts ->user_id = auth::user()->id;
    $posts ->deadline = $data->Input('dead');
    $posts ->anouncement = $data->Input('editor1');
    $posts ->type = $data->Input('type');
    $posts ->title = $data->Input('title');
     $posts ->Save();

        return back()->with('status','Anouncement Published Successfully!');
    }
     return back()->with('response','Anouncement Aleady Posted! No change Made.');
  }


    //story


        public function story(){
      $Messagectr=Messages::count();
        $reques=Requests::all();
        $mess=Messages::orderby('id','desc')->get();
        $ann=Anouncements::where('type','=','users')->count();
         $notif=Anouncements::where('type','=','users')->get();

        return view('Admin.story', compact('Messagectr','mess','reques','ann','notif'));

   }

       public function requested()
    {
        $Messagectr=Messages::count();
        $mess=Messages::orderby('id','desc')->get();
        $ann=Anouncements::where('type','=','users')->count();
         $notif=Anouncements::where('type','=','users')->get();
          
          if (Auth::user()->role==='Admin') {
              $reques=Requests::all();
          }
          else{
            $reques=Requests::Where('brname','=',Auth::user()->branch)->get();

          }


        return view('Admin.requested', compact('Messagectr','mess','reques','ann','notif'));
    }

               public function approve(Request $data,$id){
                 $data='Approved'; 
      $user =   Requests::find($id);
$user->action    =   $data;

$r=Requests::select('brname')->where('id','=',$id)->pluck('brname');
$br=Branche::where('br_name','=',$r)->first();
$br->peoples=$br->peoples+1;
$br->save();
$user->save();

        return back()->with('status','Request Approved');

   }


           public function decline(Request $data,$id){
                          $data='Declined'; 
      $user =   Requests::find($id);
$user->action    =   $data;
$user->save();
        return back()->with('status','Request Declined You may change it back Again <a href="">here</a>');
   }

   
          public function manage(Request $data,$id)
    {
      $data='User'; 
      $user =   User::find($id);
$user->role    =   $data;
$user->save();

      return back()->with('status','User Role changed to become Standard User');          
}
 public function admin(Request $data,$id)
    {
      $data='Admin'; 
      $user =   User::find($id);
$user->role    =   $data;
$user->save();

      return back()->with('status','User Role changed to become Administrator');          
}

public function notification(){
 
        $Messagectr=Messages::count();
        $branche=Branche::all();
        $mess=Messages::orderby('id','desc')->get();
        $messs=Messages::orderby('id','desc')->limit(4)->get();
        $req=Requests::where('action','=','pending')->count();
        $appr=Requests::where('action','=','approved')->count();
        $reques=Requests::where('action','=','pending')->get();
        $employee=Branche::sum('employees');

         $ann=Anouncements::where('type','=','users')->count();
         $notif=Anouncements::where('type','=','users')->get();

        $chatctr=Messages::max('id');
        $quickchat=Messages::where('id','=',$chatctr)->get();
        $user=user::all();


        return view('Admin.notification',compact('Messagectr','mess','branche','req','messs','appr','reques','employee','user','ann','notif'));
}

//add line
       public function wss()
    {
        $Messagectr=Messages::count();
        $wss=wss::where('user_id','=',Auth::user()->id)->get();
        $mess=Messages::orderby('id','desc')->get();
        $ann=Anouncements::where('type','=','users')->count();
         $notif=Anouncements::where('type','=','users')->get();

        return view('Admin.wss',compact('Messagectr','mess','wss','ann','notif'));
    }
    public function addwss(Request $data)
    {
$this->Validate($data, [
'names'=>'required',
'plumber'=>'required',
'scheme'=>'required',
'population'=>'required',
'served'=>'required',
'type'=>'required',
'sector'=>'required'
]);
$user=Wss::where(['w_name'=>$data->Input('names'),'user_id'=>Auth::user()->id])->first();
       if (empty($user->user_id)) {
    $posts= New Wss;
    $posts ->user_id = Auth::user()->id;
    $posts ->w_name = $data->Input('names');
    $posts ->plumber = $data->Input('plumber');
    $posts ->scheme = $data->Input('scheme');
    $posts ->population = $data->Input('population');
    $posts ->served = $data->Input('served');
    $posts ->ps_type = $data->Input('type');
    $posts ->bfs = $data->Input('bfs');
     $posts ->houses = $data->Input('house');
      $posts ->institution = $data->Input('institutions');
       $posts ->sector = $data->Input('sector');
        $posts ->sector1 = $data->Input('sector1');
        $posts ->sector2 = $data->Input('sector2');

        $posts ->Save();

        return back()->with('status','Water Supply system is Added Successfully!');
    }
    return back()->with('status','line exist please add new!');
    }

    //add line
       public function report()
    {
  $Messagectr=Messages::count();
         $mess=Messages::orderby('id','desc')->get();
        $messs=Messages::orderby('id','desc')->limit(4)->get();
        $employee=Branche::sum('employees');
         $ann=Anouncements::where('type','=','users')->count();
         $notif=Anouncements::where('type','=','users')->get();
        $chatctr=Messages::max('id');
        $quickchat=Messages::where('id','=',$chatctr)->get();
        $user=user::all();
        
        if (Auth::user()->role!='User') {
          
$branche=Branche::all();
$reques=Requests::where('action','=','pending')->get();
$req=Requests::where('action','=','pending')->count();
$appr=Requests::where('action','=','approved')->count();
$declined=Requests::where('action','=','declined')->count();
       

        }
        else{
            $branche=Branche::where('br_name','=',Auth::user()->branch);
            $reques=Requests::where('action','=','pending')->where('brname','=',Auth::user()->branch)->get();
            $req=Requests::where('action','=','pending')->where('brname','=',Auth::user()->branch)->count();
            $appr=Requests::where('action','=','approved')->where('brname','=',Auth::user()->branch)->count();
            $declined=Requests::where('action','=','approved')->where('brname','=',Auth::user()->branch)->count();

        }


        return view('Admin.report',compact('Messagectr','mess','branche','req','messs','appr','reques','employee','user','ann','notif','declined'));
    }
     public function editbranch($data)
    {
        $Messagectr=Messages::count();
        $branche=Branche::where('id','=',$data)->first();
        $mess=Messages::orderby('id','desc')->get();
        $ann=Anouncements::where('type','=','users')->count();
         $notif=Anouncements::where('type','=','users')->get();

        return view('Admin.blanche',compact('Messagectr','mess','branche','ann','notif'));
    }
       public function editbrache(Request $data)
    {
$this->Validate($data, [
'names'=>'required',
'manager'=>'required',
'contact'=>'required',
'population'=>'required',
'people'=>'required',
'wss'=>'required',
'employee'=>'required'
]);

$user=Branche::where('br_name','=',$data->Input('names'))->get();
    $posts= New Branche;
    $posts ->br_name = $data->Input('names');
    $posts ->br_manager = $data->Input('manager');
    $posts ->br_contact = $data->Input('contact');
    $posts ->population = $data->Input('population');
    $posts ->peoples = $data->Input('people');
    $posts ->wss = $data->Input('wss');
    $posts ->employees = $data->Input('employee');

        $posts ->save();

        return back()->with('status','Branches Added Successfully!');
    }


    //schedule

    function schedule(){
        $Messagectr=Messages::count();
        $reques=Requests::all();
        $mess=Messages::orderby('id','desc')->get();
        $ann=Anouncements::where('type','=','users')->count();
         $notif=Anouncements::where('type','=','users')->get();
         $bran=User::All();

        return view('Admin.schedule',compact('Messagectr','mess','ann','reques','notif','bran'));
    }
      public function appointment(Request $data)
    {
  $this->Validate($data, [
'editor1'=>'required',
'dead'=>'required',
'type'=>'required',
'title'=>'required',
'occupation'=>'required',


]);


  $mail=user::where('branch','=',$data->Input('type'))->pluck('email')->first();
 
// $to      = $mail;
// $subject = 'the subject';
// $message = 'hello';
// $headers = 'From: iwawepay@gmail.com';

// mail($to, $subject, $message, $headers);
  $user=Appointment::where(['title'=>$data->Input('title'),'anouncement'=>$data->Input('editor1')])->first();
       if (empty($user->anouncement)) {

$posts= New Appointment;
$posts ->user_id = auth::user()->id;
    $posts ->deadline = $data->Input('dead');
    $posts ->anouncement = $data->Input('editor1');
    $posts ->type = $data->Input('type');
    $posts ->title = $data->Input('title');
    $posts ->occupation = $data->Input('occupation');
     $posts ->Save();

        return back()->with('status','Appointment Published Successfully!');
         mail($mail, $data->Input('title'), $data->Input('editor1'),"From:iwawepay@gmail.com");
          

    }
     return back()->with('response','Appointment Aleady Posted! No change Made.');
  }

  function payment(){
    $Messagectr=Messages::count();
        $reques=Requests::all();
        $mess=Messages::orderby('id','desc')->get();
        $ann=Anouncements::where('type','=','users')->count();
         $notif=Anouncements::where('type','=','users')->get();
    $pay=Branche::all();
    $wss=Payment::paginate(8);
    $page=Payment::paginate(8);

    return view('Admin.payment',compact('Messagectr','mess','ann','reques','notif','wss','pay','page'));
  }

   public function addpay(Request $data)
    {
$this->Validate($data, [
'branch'=>'required',
'bank'=>'required',
'account'=>'required',
]);
$user=Payment::where(['account'=>$data->Input('account')])->first();
       if (empty($user->account)) {
    $posts= New Payment;
    $posts ->branch = $data->Input('branch');
    $posts ->bank = $data->Input('bank');
    $posts ->account = $data->Input('account');
            $posts ->Save();

        return back()->with('status','Payment Account is Added Successfully!');
    }
    return back()->with('status','Account Exist!');
    }



}
