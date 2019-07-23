@extends('front.master')
@section('content')


    <!-- //breadcrumbs -->
    <!-- mobiles -->
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="text-center text-danger" style="font-size: 25px; border: 1px solid #1c2d3f">
                    @if($message=Session::get('message'))
                        {{$message}}
                    @endif
                </div>

            </div>
        </div>
    </div>

    <div class="well">
        <div class="container">
            <h3 class="text-center">You have to login.If you are not registered then you registation first</h3>
            <hr/>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel-body">
                        <h2 class="text-center text-success">Login Form</h2>
                        <br/>
                        <form class="form-horizontal" action="{{url('/customer-login')}}" method="POST">
                            {{csrf_field()}}


                            <div class="form-group">
                                <label class="control-label col-md-3">Email Address</label>
                                <div class="col-md-9" >
                                    <input type="email" name="email" class="form-control"/>
                                    {{$errors->has('email') ? $errors->first('email'):' '}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Password</label>
                                <div class="col-md-9" >
                                    <input type="password" name="password" class="form-control"/>
                                    {{$errors->has('password') ? $errors->first('password'):' '}}
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Login"/>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="panel-body">
                        <h2 class="text-center text-success">Registation Form</h2>
                        <br/>
                        <form class="form-horizontal" action="{{url('/new-customer')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="control-label col-md-3">First Name</label>
                                <div class="col-md-9" >
                                    <input type="text" name="first_name" class="form-control"/>
                                    {{$errors->has('first_name') ? $errors->first('first_name'):' '}}
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3">Last Name</label>
                                <div class="col-md-9" >
                                    <input type="text" name="last_name" class="form-control"/>
                                    {{$errors->has('last_name') ? $errors->first('last_name'):' '}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Email</label>
                                <div class="col-md-9" >
                                    <input type="email" name="email" class="form-control"/>
                                    {{$errors->has('email') ? $errors->first('email'):' '}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Password</label>
                                <div class="col-md-9" >
                                    <input type="password" name="password" class="form-control"/>
                                    {{$errors->has('password') ? $errors->first('password'):' '}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Phone Number</label>
                                <div class="col-md-9" >
                                    <input type="number" name="phone_number" class="form-control"/>
                                    {{$errors->has('phone_number') ? $errors->first('phone_number'):' '}}
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Registation"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>









@endsection