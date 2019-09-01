@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 p-5">
            <img class="rounded-circle" style="width:85px;height:85px" src="https://instagram.fdac16-1.fna.fbcdn.net/vp/22faf033c83f1ffb4b0e42b82cacd2d7/5DF066C8/t51.2885-19/s320x320/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fdac16-1.fna.fbcdn.net" alt="">
        </div>
        <div class="col-md-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>206</strong> posts</div>
                <div class="pr-5"><strong>21k</strong> followers</div>
                <div class="pr-5"><strong>200</strong> following</div>
            </div>
            <div class="pt-5 "><strong>freeCodeGram</strong></div>
            <div><p>We're a global community of millions of people learning 
            to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</p></div>
            <div><a href="">www.freecodegram.com</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-md-4">
            <img src="https://instagram.fdac16-1.fna.fbcdn.net/vp/d63d15dac83ee3e32628cc441c1c7c89/5E15CD6A/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/67980021_2202052933427189_6407359992029428126_n.jpg?_nc_ht=instagram.fdac16-1.fna.fbcdn.net&_nc_cat=105" class="w-100">
           
        </div>
        <div class="col-md-4">
             <img src="https://instagram.fdac16-1.fna.fbcdn.net/vp/cc859f4efb1eb4af2f01dd67a62c69d4/5DF5A311/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/68657064_406038826685251_8840140737341399690_n.jpg?_nc_ht=instagram.fdac16-1.fna.fbcdn.net&_nc_cat=107" class="w-100">
        </div>
        <div class="col-md-4">
        <img src="https://instagram.fdac16-1.fna.fbcdn.net/vp/d9b60fb80e3eb7ac269131005df1e802/5E056371/t51.2885-15/sh0.08/e35/c0.75.877.877a/s640x640/67524515_156209612234747_3747271840880064739_n.jpg?_nc_ht=instagram.fdac16-1.fna.fbcdn.net&_nc_cat=111" class="w-100">

        </div>
    </div>
</div>
@endsection
