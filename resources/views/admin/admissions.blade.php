@extends('admin/general')

@section('content')
<div class="admissions-page admin-page">
    <section class="admin-container admin-section" id="admissions-list">
        <p class="admin-section-title">
            Admission List
        <p class="caption" style='text-align:center;'>A list of students awaiting admissions</p>

        <div class="students-admission-list" id="adm-list">
            <div class="student-admission-card">
                <img src="https://www.seekpng.com/png/detail/110-1100707_person-avatar-placeholder.png" alt="">
                <div class="col">
                    <div class="text-margin">

                        <p class="name">Edwin Ndiritu</p>
                        <p class="course">Bachelor of Informatics and Computer Science</p>
                    </div>
                    <p class="date-applied caption">Applied on 3rd December</p>
                </div>
            </div>
        </div>
        </p>
    </section>
    <section class="admin-container admin-section" id="admissions-detail">
    @if(Request::get('id'))
    @else
    <div class="div-placeholder">
        <img src="https://studio.uxpincdn.com/studio/wp-content/uploads/2016/04/image04-3.png" alt="">
        <p class="caption">Select a student to begin admission process</p>
    </div>
    @endif
    </section>


</div>
@endsection

<script>

    function getAdmission(){
        
    }
</script>