<!-- Main Content -->
<div class="col-md-10 p-4">
    <!-- Profile Section -->
    <div class="text-center mb-5">
        <div class="position-relative d-inline-block mb-3">
            <div class="rounded-circle border border-4 border-info position-absolute top-0 start-0 w-100 h-100"></div>
            <img src="{{ asset( 'images/member_img/' . $member->mem_img_url ) }}"
                alt="Profile" class="rounded-circle object-fit-cover" style="width: 128px; height: 128px;">
        </div>
        <h2 class="fs-3 fw-bold">{{ $member->mem_name }}</h2>
        <p class="text-muted">ID: {{ $member->member_unique_id }}</p>
    </div>

    <!-- Personal Details Card -->
    <div class="card mb-5">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6"><strong>• ID:</strong></div>
                <div class="col-md-6">{{ $member->id }}</div>
                <div class="col-md-6"><strong>• Member Unique ID:</strong></div>
                <div class="col-md-6">{{ $member->member_unique_id }}</div>
                <div class="col-md-6"><strong>• Name:</strong></div>
                <div class="col-md-6">{{ $member->mem_name }}</div>
                <div class="col-md-6"><strong>• Father's Name:</strong></div>
                <div class="col-md-6">{{ $member->mem_father }}</div>
                <div class="col-md-6"><strong>• Mother's Name:</strong></div>
                <div class="col-md-6">{{ $member->mem_mother }}</div>
                <div class="col-md-6"><strong>• Gender:</strong></div>
                <div class="col-md-6">{{ $member->mem_gender }}</div>
                <div class="col-md-6"><strong>• Address:</strong></div>
                <div class="col-md-6">{{ $member->mem_address }}</div>
                <div class="col-md-6"><strong>• Admission Date:</strong></div>
                <div class="col-md-6">{{ date('d-m-Y', strtotime($member->mem_admission_date)) }}</div>
                <div class="col-md-6"><strong>• Date of Birth:</strong></div>
                <div class="col-md-6">{{ date('d-m-Y', strtotime($member->date_of_birth)) }}</div>
                <div class="col-md-6"><strong>• Phone:</strong></div>
                <div class="col-md-6">{{ $member->mem_cell }}</div>
                <div class="col-md-6"><strong>• Email:</strong></div>
                <div class="col-md-6">{{ $member->mem_email }}</div>
            </div>
        </div>
    </div>

    <!-- Locker Details Card -->
    <div class="card mb-5" style="margin-top: 20px;">
        <div class="card-header text-center">
            <h5 class="card-title">Locker Details</h5>
        </div>
        <div class="card-body">
            <div class="row g-3">
                @if(isset($locker_details))
                    <div class="col-md-6"><strong>• Locker Status:</strong></div>
                    <div class="col-md-6">{{ $locker_details->status }}</div>
                    <div class="col-md-6"><strong>• Locker Number:</strong></div>
                    <div class="col-md-6">{{ $locker_details->locker_number }}</div>
                    <div class="col-md-6"><strong>• Start Date:</strong></div>
                    <div class="col-md-6">{{ date('d-m-Y', strtotime($locker_details->start_date)) }}</div>
                    <div class="col-md-6"><strong>• End Date:</strong></div>
                    <div class="col-md-6">{{ date('d-m-Y', strtotime($locker_details->end_date)) }}</div>
                @else
                    <div class="col-12 text-center text-muted">
                        No locker details available
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Health & Fitness Details -->
    <div class="card mb-5" style="margin-top: 20px;">
        <div class="card-header text-center">
            <h5 class="card-title">Health & Fitness Details</h5>
        </div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="d-flex gap-4">
                        <!-- Pulse Rate -->
                        <div class="text-center">
                            <div class="progress-circle position-relative" data-progress="50">
                                <svg viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="45" class="bg"
                                        style="stroke: #e5e7eb;"></circle>
                                    <circle cx="50" cy="50" r="45" class="progress"
                                        style="stroke: #10B981; stroke-dasharray: {{ 50 }} 283;"></circle>
                                </svg>
                                <div class="position-absolute"
                                    style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <span class="fs-6 fw-bold">50 Bps</span>
                                </div>
                            </div>
                            <div class="mt-2">Pulse Rate</div>
                        </div>
                        <!-- Weight -->
                        <div class="text-center">
                            <div class="progress-circle position-relative" data-progress="40">
                                <svg viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="45" class="bg"
                                        style="stroke: #e5e7eb;"></circle>
                                    <circle cx="50" cy="50" r="45" class="progress"
                                        style="stroke: #F59E0B; stroke-dasharray: 40 283;"></circle>
                                </svg>
                                <div class="position-absolute"
                                    style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <span class="fs-6 fw-bold">40 Kg</span>
                                </div>
                            </div>
                            <div class="mt-2">Weight</div>
                        </div>
                        <!-- Exercise Goal -->
                        <div class="text-center">
                            <div class="progress-circle position-relative" data-progress="30">
                                <svg viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="45" class="bg"
                                        style="stroke: #e5e7eb;"></circle>
                                    <circle cx="50" cy="50" r="45" class="progress"
                                        style="stroke: #EF4444; stroke-dasharray: {{ 70 }} 283;"></circle>
                                </svg>
                                <div class="position-absolute"
                                    style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <span class="fs-6 fw-bold">70%</span>
                                </div>
                            </div>
                            <div class="mt-2">Exercise Goal</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-2"><strong>• Height (cm):</strong> {{ $member->height }}</div>
                    <div class="mb-2"><strong>• BMI:</strong> {{ $member->bmi }}</div>
                    <div class="mb-2"><strong>• Blood Pressure:</strong> {{ $member->blood_pressure }}</div>
                    <div class="mb-2"><strong>• Diet Routine:</strong> {{ $member->diet_routine }}</div>
                    <div class="mb-2"><strong>• Sleep Time:</strong> {{ $member->sleep_time }}</div>
                    <div class="mb-2"><strong>• Wake Up Time:</strong> {{ $member->wake_up_time }}</div>
                    <div class="mb-2"><strong>• Medical History:</strong> {{ $member->medical_history }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Attendance Card -->
    <div class="card mb-5" style="margin-top: 20px;">
        <div class="card-header text-center">
            <h5 class="card-title">Attendance and Package Expiry</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">
                        <div class="progress-circle position-relative" data-progress="20">
                            <svg viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="45" class="bg"
                                    style="stroke: #e5e7eb;">
                                </circle>
                                <circle cx="50" cy="50" r="45" class="progress"
                                    style="stroke: #0EA5E9; stroke-dasharray: {{ 80 }} 283;"></circle>
                            </svg>
                            <div class="position-absolute"
                                style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                <span class="fs-6 fw-bold">80 Days</span>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-start">
                            <div class="mt-2">Attendance</div>
                            <div class="text-muted small">Out of 30 Days</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div><strong>• Package Expiry Date:</strong>
                        {{ $member->package_expiry_date ? date('dS F, Y', strtotime($member->package_expiry_date)) : 'N/A' }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profession Card -->
    <div class="card mb-5" style="margin-top: 20px;">
        <div class="card-header text-center">
            <h5 class="card-title">Profession</h5>
        </div>
        <div class="card-body">
            <div class="mb-2"><strong>• Office Address:</strong> {{ $member->office_address }}</div>
            <div class="mb-2"><strong>• Work Time:</strong> {{ $member->work_time }}</div>
        </div>
    </div>

    <!-- Save Button -->
    <div class="d-flex justify-content-end" style="margin-top: 20px;">
        <a href="{{ route('members.edit', $member->id) }}" class="btn btn-success">Edit Member</a>
    </div>

</div>
