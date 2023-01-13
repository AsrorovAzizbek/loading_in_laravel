<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\teacher;
use App\student;
use App\video;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    /*********   teacher  ************/
    /*********   teacher  ************/
    /*********   teacher  ************/
    /*********   teacher  ************/
    /*********   teacher  ************/
    public function tech()
    {
        $user = teacher::all();
        return view('teacher',[
            'tech'=>$user
        ]);
    }
    public function tsaq(Request $request)
    {
        $rasm = time().'.'.$request->techrasm->getClientOriginalExtension();
        $request->techrasm->move(public_path('iamag'), $rasm);

        $user = new teacher();
        $user->name=$request->name;
        $user->email=$_POST['email'];
        $user->rasmtech= $rasm;
        $user->password= Hash::make($request->pass);
        $user->save();

        return redirect('/teacher');
    }
    public function tdel($id)
    {
        $user = teacher::where('id', $id)->delete();
        return back();
    }
    public function ted($id)
    {
        $user = teacher::where('id', $id)->first();
        return view('tedit', [
            'ted'=>$user
        ]);
    }
    public function edsaq(Request $request, $id)
    {
        $rasm = time().'.'.$request->rasma->getClientOriginalExtension();
        $request->rasma->move(public_path('iamag'), $rasm);

        $user = teacher::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'rasmtech'=>$rasm
        ]);
        return redirect('/teacher');
    }
    /********   student   ********/
    /********   student   ********/
    /********   student   ********/
    /********   student   ********/
    public function sdel($id)
    {
        $user = student::where('id',$id)->delete();
        return back();
    }
    public function stu()
    {
        $uder = student::all();
        // dd($uder);
        return view('student',[
            'stu'=>$uder
        ]);
    }
    public function stusaq(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'file' => 'required',
            'email' => 'required|email',
            'pass' => 'required',
        ]);
        $rasm = time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('rasmcha'), $rasm);
        // dd($rasm);
        $uder = new student();
        $uder->name=$request->name;
        $uder->email=$request->email;
        $uder->rasmstu =$rasm;
        $uder->password=Hash::make($request->pass);
        $uder->save();

        return redirect('/student');

    }
    public function sedsaq(Request $request, $id)
    {

        $rasm = time().'.'.$request->ras->getClientOriginalExtension();
        $request->ras->move(public_path('rasmcha'), $rasm);

        $stu = student::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'rasmstu'=>$rasm
        ]);
        return redirect('/student');
    }
    public function sedit(Request $request, $id)
    {
        $user = student::where('id',$id)->first();
        return view('sedit',[
            'sed'=>$user
        ]);
    }
    /**********   vid ***********/
    /**********   vid ***********/
    /**********   vid ***********/
    /**********   vid ***********/
    public function vid()
    {
        $video = video::all();
        return view('vid',[
            'vid'=>$video
        ]);
    }
}
