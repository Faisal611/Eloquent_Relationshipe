<?php

namespace App\Http\Controllers;

use App\address;
use App\post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelationController extends Controller
{
// User create
    public function userCreate (){
        $data =[
            'name'=>'faisal',
            'email'=>'fsal@gmail.com',
            'password'=>'123'
        ];
       User::create($data);
       return 'successful user create';
    }

// create address
    public function addressCreate(){
        $data =[
           'user_id'=> '2',
           'state'=>'hello kolkata',
           'city'=>'bosirhat',
           'country'=>'INDIA'
        ];
        address::create($data);
    }
// 35 create Tag
    public function tagCreate(){
        $data =[
           'title'=> 'seo',
        ];
        Tag::create($data);
        return 'successful insert your tag';
    }

// create posts
    public function postCreate(){
       $data = [
           'user_id' =>'1',
           'title' =>'bd',
           'description' =>'wonderful',
           'status' =>'1',
       ];
       post::create($data);
       return 'successful post';
    }

//create all data show
    public function allDataShow(){
        $allData = User::get();
        dd($allData);
    }

//join table

/**one to one*/
    public function oneToOne(){
      $user =  User::find(2);
//    dd($user->address->city);
      echo $user->name. '<br>';
      echo $user->email. '<br>';
      echo $user->address->country. '<br>';
    }

    /**one to one Inverse*/
    public function oneToOneInverse(){
      $address =  address::find(1);
//        dd($address->user);
        echo $address->city.'<br>';
        echo $address->user->name.'<br>';
        echo $address->country.'<br>';


    }
    /**one to many*/
    public function oneToMany(){
        $user = User::find(2);
//        dd($user->posts);
        echo $user->name.'<br>';
        echo $user->email.'<br>';
//      echo $user->posts->title;
/** 1st way */
        foreach ($user->posts as $posts ){
            echo $posts->title.'<br>';
        }
 /** 2nd way */
//        $posts = post::where('user_id',1)->get();
//        foreach ($posts as $post){
//            echo $post->title.'<br>';
//        }
    }

/**many to one*/
public function oneToManyInverse (){
   $posts = post::find(1);
   dd($posts->user);
//    echo $posts->user->name.'<br>';
//    echo $posts->user->email.'<br>';
//    echo $posts->description.'<br>';


}


public function manyToMany(){
    $post = post::find(2);
    echo $post->title.'<br>';
    echo '<h2> Tag</h2>'.'<br>';
    foreach ($post->tags as $tags){
        echo $tags->title .'<br>';
    }
//    dd($post->tags);

}
public function syncCreate(){
    $posts =post::find(2);
    $posts->tags()->sync([2, 3]);
}







}
