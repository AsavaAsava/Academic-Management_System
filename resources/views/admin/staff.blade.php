@extends('admin/general')

@section('content')
<div class="admin-page">
    <section class="admin-container admin-section" id="staff-list-section">
        <p class="admin-section-title">
            Staff Members
        </p>
        <input type="text" placeholder="Search for a staff Member" class="searchField">
        <div id="staff-list">

        </div>
    </section>

    <section class="admin-container admin-section" id="staff-detail">
        <p class="admin-section-title">
            Staff Details
        </p>
        <div class="staff-details-container">
            <div class="staff-profile row">
                <img src="https://www.seekpng.com/png/detail/110-1100707_person-avatar-placeholder.png" alt="">
                <div class="staff-profile-details ">
                    <p class="name">Edwin Ndiritu</p>
                    <div class="row">
                        <p class="course">Accounting</p>
                        <span> . </span>
                        <p class="caption">Admin</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="staff-update-form">
            <div class="row">

                <div class="form-container">
                    <label for="">First Name</label>
                    <input type="text" placeholder="First Name">
                </div>
                <div class="form-container">
                    <label for="">Last Name</label>
                    <input type="text" placeholder="First Name">
                </div>
            </div>
            <div class="row">

                <div class="form-container">
                    <label for="">Staff Email</label>
                    <input type="text" placeholder="First Name">
                </div>
                <div class="form-container">
                    <label for="">Personal Email</label>
                    <input type="text" placeholder="First Name">
                </div>
            </div>
            <div class="row">

                <div class="form-container">
                    <label for="">Department</label>
                    <select id="departments-update">

                    <option>Accounting</option>
                    </select>
                </div>
                <div class="form-container">
                    <label for="">Role</label>
                    <select id="roles-update">

                    <option>Accounting</option>
                    </select>
                </div>
            </div>
            <button class="primary-btn" id="update-profile-btn">
                <div class="row">
                    <i class="fas fa-user-edit"></i>
                    Update Profile
                </div>
            </button>
        </div>
        <div class="divider"></div>
        <div class="staff-send-email">
            <p class="admin-section-subtitle">Send An email</p>
            <input type="text" class="textarea" id="mail-message">
            <button class="send-mail-btn primary-btn">
                <div class="row">
                    <i class="fa fa-envelope"></i>
                    Send Message
                </div>
            </button>
        </div>

    </section>

    <section class="admin-container admin-section" id="staff-add">
        <p class="admin-section-title">Add a staff member</p>
        <div class="form">


            <div class="form-container">
                <label for="">First Name</label>
                <input type="text" placeholder="First Name">
            </div>
            <div class="form-container">
                <label for="">Last Name</label>
                <input type="text" placeholder="First Name">
            </div>

            <div class="form-container">
                <label for="">Staff Email</label>
                <input type="text" placeholder="First Name">
            </div>
            <div class="form-container">
                <label for="">Personal Email</label>
                <input type="text" placeholder="First Name">
            </div>

            <div class="row">

                <div class="form-container">
                    <label for="">Department</label>
                    <select id="departments-add">

                        <option>Accounting</option>
                    </select>
                </div>
                <div class="form-container">
                    <label for="">Role</label>
                    <select id="roles-add">

                        <option>Accounting</option>
                    </select>
                </div>
            </div>
            <button class="primary-btn" id="add-staff-btn">
                <div class="row">
                    <i class="fas fa-users-plus"></i>
                    Update Profile
                </div>
            </button>
        </div>
</div>

</section>
</div>
@endsection

<script>
    window.onload = () => {
        getStaffs();
    }

    function getStaffs() {
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };
        var staff_list = document.getElementById('staff-list')

        fetch("http://127.0.0.1:8000/api/staff/", requestOptions)
            .then(response => response.json())
            .then(result => {
                var staff_card = document.createElement("div")
                staff_card.classList.add("student-admission-card", "staff-card")
                result.map((e) => {

                    var date = Math.floor(Math.random() * (31 - 1 + 1)) + 1
                    staff_card.innerHTML = `
                        <img src="https://www.seekpng.com/png/detail/110-1100707_person-avatar-placeholder.png" alt="">
                        <div class="col">
                            <div class="text-margin">

                                <p class="name">${e['first_name']} ${e['last_name']}</p>
                                <p class="course">${e['department']['name']}</p>
                            </div>
                            <p class="date-applied caption">Applied on ${date} December</p>
                        </div>
                    `
                    staff_card.onclick=()=>{
                        window.location = `staff/${e['id']}`   
                                        }
                    staff_list.appendChild(staff_card)
                });

            })
            .catch(error => console.log('error', error));
    }


</script>