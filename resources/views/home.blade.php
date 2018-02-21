@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
         
        
        @if (Auth::check() && Auth::user()->hasRole('Student'))
        <div class="jumbotron">
            <div class="container">
                <h1>Welcome Student</h1>
                <p>
                    <a href="/studentpage" class="btn btn-info btn-lg">Update Profile</a>
                </p>
            </div>
        </div>
        @endif

        @if (Auth::check() && Auth::user()->hasRole('Teacher'))
        <div class="jumbotron">
            <div class="container">
                <h1>Teacher Dashboard</h1>
                <p>
                    <a href="/teacherpage" class="btn btn-info btn-lg">Update profile</a>
                        <p><a href="/subjects" class="btn btn-success btn-lg">Subjects</a></p>
                </p>
            </div>
        </div>
        @endif

        @if (Auth::check() && Auth::user()->hasRole('Admin'))
        <div class="jumbotron">
            <div class="container center">
                <h2>Administrator Dashboard</h2>
                <p>
                    <a href="/students" class="btn btn-lg btn-info">Students</a>
                    <a href="/teachers" class="btn btn-lg btn-info">Teachers</a>
                    <a href="/classgroups" class="btn btn-lg btn-info">Classgroups</a></br><br />
                    <a href="/classrooms" class="btn btn-lg btn-info">Classrooms</a>
                    <a href="/levels" class="btn btn-lg btn-info">Levels</a>
                    <a href="/subjects" class="btn btn-lg btn-info">Subjects</a>
                       
                </p>
            </div>
        </div>
        @endif

        @if (!Auth::check())

            </div>
            <div class="row">
            <div class="jumbotron">
                        <div class="container">
                              Welcome to school information system
                            <h3>Login Please</h3>
                        <p class="lead">
                            <a href="/login" class="btn btn-lg btn-info">Log In</a>
                        </p>
                        </div>
                    </div>
                </div>
                
            </div>    
         @endif


        </div>
    </div>
</div>
@endsection
