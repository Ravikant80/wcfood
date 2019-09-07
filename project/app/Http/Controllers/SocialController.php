<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\User;
class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
 
    public function callback($provider)
    {
               
        $getInfo = Socialite::driver($provider)->user();
         
        $user = $this->createUser($getInfo,$provider);
 
        auth()->login($user);
 
        return redirect()->to('/my-account');
 
    }
   function createUser($getInfo,$provider){
 
     $user = User::where('email', $getInfo->email)->first();
 
     if (!$user) {
         /*
         $user = User::create([
            'name'     => $getInfo->name,
            'email'    => $getInfo->email,
            'provider' => $provider,
            'provider_id' => $getInfo->id
        ]);
          * 
          */
            $user = new User;
            $user->name = $getInfo->getName();
            $user->email = $getInfo->getEmail();
            $user->provider = $provider;
            $user->provider_id = $getInfo->getId();
            $fileContents = file_get_contents($getInfo->avatar_original);
            $fileName = $getInfo->getId() . ".jpg";

            File::put('assets/upload/user_img/' . $fileName, $fileContents);

            $user->avatar = $fileName;

            $user->save();
      }
      return $user;
   }
}