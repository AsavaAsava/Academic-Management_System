@extends('lecturers/layout')

@section('main_content')
<div class="lecturers-container" id='mail_lecturers'>
    <div class="row" id='send-mail-row'>
        <section id="broadcast-mail">
            <p class="lecturer-section-title">
                Message to course
            </p>
            <form action="{{url('lecturers/class/messaging/group')}}" method="post">
                @csrf
                <div class="form-container">
                    <label for="">Subject</label>
                    <input type="text" placeholder='subject' name='title'>
                    <input type="hidden" name="class_id" value='{{$class["id"]}}'>
                </div>
                <div class="form-container">
                    <label for="">Message</label>
                    <input type="text" class="textarea" placeholder='Message' name='message'>
                </div>

                <button class="primary-btn" type='submit'>Send Message</button>
            </form>
        </section>

        <section id="broadcast-student">
            <p class="lecturer-section-title">
                Message a student
            </p>
            <form action="{{url('lecturers/class/messaging/student')}}" method="post">
                @csrf
                <div class="form-container">
                    <label for="">Student</label>
                    <input type="hidden" name="class_id" value='{{$class["id"]}}'>

                    <select name="student_id" id="">
                        @foreach($students as $student)
                        <option value="{{$student['student_id']}}">{{$student['student_id']}} {{$student['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-container">
                    <label for="">Subject</label>
                    <input type="text" placeholder='subject'>

                </div>
                <div class="form-container">
                    <label for="">Message</label>
                    <input type="text" class="textarea" placeholder='Message'>
                </div>
                <button class="primary-btn">Send Message</button>
            </form>
        </section>
    </div>
</div>
@endsection