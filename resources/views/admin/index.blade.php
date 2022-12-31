@extends('admin.general')

@section('content')

<div class="admin-hero">
    <div class="col">
        <img src="{{URL::asset('assets/admin/admin_hero.png')}}" alt="">
        <div class="hero-text">

            <h3>You are in control</h3>
            <p class="hero-caption">Do not worry, you can deal with everything from here :)</p>
            <div class="hero-links">
                <a href="">Admissions</a>
                <a href="">Staff</a>
                <a href="">Departments</a>
                <a href="">Announcements</a>
            </div>
        </div>
    </div </div>
</div>
@endsection