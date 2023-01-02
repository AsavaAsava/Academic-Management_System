@extends('admin/general')

@section('content')
<div class="admin-page">
    

    <section class="admin-container admin-section" id="notices-private-section">
        <p class="admin-section-title">
            Send To A Group
        </p>

        <div class="form">
            <div class="form-container">
                <label for="">Subject</label>
                <input type="text" name="" id="" placeholder="Subject or title">
            </div>
            <div class="form-container">
                <label for="">Content</label>
                <input type="text" class="textarea" placeholder="Message Content">
            </div>
            <div class="row">
                <button class="primary-btn">Send to staff</button>
                <button class="primary-btn">Send to students</button>
                <button class="primary-btn">Send to everyone</button>
            </div>
        </div>
    </section>
    <section class="admin-container admin-section" id="notices-unit-section">
        <p class="admin-section-title">
            Unit Registration Requests
        </p>
        <div class="form">
            <div class="form-container">
                
            </div>
        </div>
    </section>
</div>
@endsection