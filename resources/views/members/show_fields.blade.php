<div class="card shadow-lg p-4">
    <div class="card-body">
        <h4 class="card-title text-center mb-4">Member Profile</h4>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ Storage::url($member->mem_img_url ?? 'default.jpg') }}" class="img-fluid" alt="Member Image" style="max-width: 200px;">
            </div>
            <div class="col-md-8">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>ID:</strong> {{ $member->id }}</li>
                    <li class="list-group-item"><strong>Member Unique ID:</strong> {{ $member->member_unique_id }}</li>
                    <li class="list-group-item"><strong>Name:</strong> {{ $member->mem_name }}</li>
                    <li class="list-group-item"><strong>Father:</strong> {{ $member->mem_father }}</li>
                    <li class="list-group-item"><strong>Mother:</strong> {{ $member->mem_mother }}</li>
                    <li class="list-group-item"><strong>Gender:</strong> {{ $member->mem_gender }}</li>
                    <li class="list-group-item"><strong>Address:</strong> {{ $member->mem_address }}</li>
                    <li class="list-group-item"><strong>Admission Date:</strong> {{ $member->mem_admission_date }}</li>
                    <li class="list-group-item"><strong>Date of Birth:</strong> {{ $member->date_of_birth }}</li>
                    <li class="list-group-item"><strong>Phone:</strong> {{ $member->mem_cell }}</li>
                    <li class="list-group-item"><strong>Email:</strong> {{ $member->mem_email }}</li>
                </ul>
            </div>
        </div>

        <hr class="my-4">

        <h5 class="text-center mb-3">Health & Fitness Details</h5>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Height:</strong> {{ $member->height }} cm</li>
                    <li class="list-group-item"><strong>Weight:</strong> {{ $member->weight }} kg</li>
                    <li class="list-group-item"><strong>BMI:</strong> {{ $member->bmi }}</li>
                    <li class="list-group-item"><strong>Blood Group:</strong> {{ $member->blood_group }}</li>
                    <li class="list-group-item"><strong>Blood Pressure:</strong> {{ $member->blood_pressure }}</li>
                    <li class="list-group-item"><strong>Pulse Rate:</strong> {{ $member->pulse_rate }}</li>
                    <li class="list-group-item"><strong>Exercise Goal:</strong> {{ $member->exercise_goal }}</li>
                    <li class="list-group-item"><strong>Push-ups:</strong> {{ $member->push_up_count }}</li>
                    <li class="list-group-item"><strong>Pull-ups:</strong> {{ $member->pull_up_count }}</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Profession:</strong> {{ $member->profession }}</li>
                    <li class="list-group-item"><strong>Office Address:</strong> {{ $member->office_address }}</li>
                    <li class="list-group-item"><strong>Diet Routine:</strong> {{ $member->current_diet_routine }}</li>
                    <li class="list-group-item"><strong>Sleep Time:</strong> {{ $member->sleep_time }}</li>
                    <li class="list-group-item"><strong>Wake Up Time:</strong> {{ $member->wake_up_time }}</li>
                    <li class="list-group-item"><strong>Work Time:</strong> {{ $member->work_time }}</li>
                    <li class="list-group-item"><strong>Medical History:</strong> {{ $member->medicine_history }}</li>
                    <li class="list-group-item"><strong>Injuries/Health Issues:</strong> {{ $member->injury_or_health_issue }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
