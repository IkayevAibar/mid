@extends('layouts.app')
    
@section('content')
<div class="container padding">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div class="card padding">
                    <div class="card-header">Profile Information of <kbd >{{ Auth::user()->name}}</kbd></div>
                    <div class="row padding" style="margin-bottom: 20px;margin-top: 20px;">
                        <div class="col-1"></div>
                        <div class="col-4">
                            <img src="{{$user_inf->image}}" class="img-fluid rounded-circle" alt="">
                            <div class="row justify-content-center" style="margin:12px;">
                                <div class="col-4">
                                    <a name="" id="" class="btn btn-primary" href="#" role="button">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-5">
                            <div class="row">
                                <label class="col-6" for="">Name</label>
                                <label class="col-6" for="">{{$user_inf->name}}</label>
                            </div>
                            <div class="row">
                                <label class="col-6" for="">Surname</label>
                                <label class="col-6" for="">{{$user_inf->surname}}</label>
                            </div>
                            <div class="row">
                                <label class="col-6" for="">Sex</label>
                                <label class="col-6" for="">{{$user_inf->sex}}</label>
                            </div>
                            <div class="row">
                                <label class="col-6" for="">Country</label>
                                <label class="col-6" for="">{{$user_inf->country}}</label>
                            </div>
                            <div class="row">
                                <label class="col-6" for="">Date of Birth</label>
                                
                                <label class="col-6" for="">{{$user_inf->birth_date}}</label>
                            </div>
                            <div class="row">
                                <label class="col-6" for="">Account created</label>
                                <label class="col-6" for="">{{$user_inf->created_at}}</label>
                            </div>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-4"></div>
                                <label class="col-7" for="">Description</label>
                                <div class="col-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-1"></div>
                                <label class="col-10" for=""></label>
                                <textarea disabled="disabled" class="col-10" type="" rows="6" style="resize: none; background-color: white;" maxlength="150">{{$user_inf->description}}</textarea>
                                <div class="col-1"></div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
