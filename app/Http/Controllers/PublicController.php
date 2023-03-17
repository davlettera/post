<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\CareerRequestMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AdminController;

class PublicController extends Controller
{
    public function home(Request $request){

        $temperature_current_weather_icon = '';

        $temperature_in_celsius='';

         $city_name = $request->input('city_name');

       if($request->has('city_name')){

        $api_key = '184c4eb73eb923445bfe7c1ef59e6588';

        $api_url = 'https://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;
 
        $weather_data = json_decode(file_get_contents($api_url), true);

        $temperature = $weather_data['main']['temp'];
 
        $temperature_in_celsius = round($temperature - 273.15);
 
        $temperature_current_weather = $weather_data['weather'][0]['main'];
 
        $temerature_current_weather_description = $weather_data['weather'][0]['description'];

        $temperature_current_weather_icon = $weather_data['weather'][0]['icon'];

        session(['temperature_current_weather_icon' => $temperature_current_weather_icon, 'city_name' => $city_name, 'temperature_in_celsius' => $temperature_in_celsius]);
 
       }
       
      
        
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(2)->get();

        // $pippo = $articles->count();
        // $pippo = DB::table('articles')->count();
        $bestImage = Article::where('best', 1)->first();

        return view('welcome', compact('articles', 'bestImage', 'temperature_current_weather_icon', 'city_name', 'temperature_in_celsius'));
    }

    //questa funzione è in Auth/VerificationController  
    // public function __construct(){
    //     $this->middleware('auth')->except('homepage', 'index', 'show');

    // }

    
    public function careers(){
        return view('careers');
    }
    public function careersSubmit(Request $request){
        $request->validate([
            'role' => 'required',
            'email' => 'required|email',
            'biography' => 'nullable|string|max:500',
            
            
        ]);
        
        

        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $biography = $request->biography;

        Mail::to('admin@theaulabpost.it')->send(new CareerRequestMail(compact('role', 'email', 'biography')));

        switch($role){
            case 'admin':
                $user->is_admin = NULL;
                break;

            case 'revisor':
                $user->is_revisor = NULL;
                break;

            case 'writer':
                $user->is_writer = NULL;
                break;
        }

        User::where('id', auth()->id())->update(['biography' => $request->biography]);
        
        $user->update();
        


       
        // return view('article.byAuthor', ['message' => $message]);

        return redirect(route('homepage'))->with('message', __('Grazie per esserti registrato'));

        

        
    }

    

//  
       




           


    
    


   

    
    




    








    //functions tecnciche per  pagine da modificare
    public function following(){
        return view('test/following');
    }
    public function blogdetail(){
        return view('test/blogdetail');
    }
    public function test(){
        return view('test/test');
    }
    

}
