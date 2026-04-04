<div class="form-group row">
    <!-- Left Column -->
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <!-- Name -->
                <label for="name">Name *</label>
                <input type="text" required class="form-control" name="name" id="name" value="{{ old('name', $item->name) }}" placeholder="John Smith">
            </div>
            <div class="col-md-12 mt-4">
                <!-- Introduction -->
                <label for="introduction">Introduction *</label>
                <textarea required class="form-control" name="introduction" id="introduction" rows="3">{{ old('introduction', $item->introduction) }}</textarea>
            </div>
            <div class="col-md-12 mt-4">
                <!-- Email -->
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $item->email) }}" placeholder="example@example.com">
            </div>
            <div class="col-md-12 mt-4">
                <!-- Qualification -->
                <label for="qualification">Qualification *</label>
                <textarea required class="form-control" id="summernote" name="qualification" rows="2">{{ old('qualification', $item->qualification) }}</textarea>
            </div>

        </div>
    </div>
    <!-- Right Column -->
    <div class="col-md-6">
        <!-- Image -->
        <label for="image">Image</label>
        <input type="file" class="form-control" accept="image/*" name="image">
        @if ($item->getImage())
        <img src="{{ $item->getImage() }}" alt="" width="20%">
        @endif
        <div class="col-md-12 mt-4">
            <!-- Phone -->
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', $item->phone) }}" placeholder="Phone Number">
        </div>
        <div id="staff-fields" class="col-md-12 mt-4">
            <!-- Designation -->
            <label for="designation">Designation *</label>
            <select name="designation" class="form-control">
                <option value="Owner" {{ old('designation', $item->designation) == 'Owner' ? 'selected' : '' }}>
                    Owner
                </option>
                <option value="Spa Manager" {{ old('designation', $item->designation) == 'Spa Manager' ? 'selected' : '' }}>
                    Spa Manager
                </option>
                <option value="Receptionist" {{ old('designation', $item->designation) == 'Receptionist' ? 'selected' : '' }}>Receptionist
                </option>
                <option value="Account and Administrative Assistant" {{ old('designation', $item->designation) == 'Account and Administrative Assistant' ? 'selected' : '' }}>
                    Account and Administrative Assistant
                </option>
                <option value="Consultant" {{ old('designation', $item->designation) == 'Consultant' ? 'selected' : '' }}>
                    Consultant
                </option>
                <option value="Beauty Therapist" {{ old('designation', $item->designation) == 'Beauty Therapist' ? 'selected' : '' }}>
                    Beauty Therapist
                </option>
                <option value="Massage Therapist" {{ old('designation', $item->designation) == 'Massage Therapist' ? 'selected' : '' }}>
                    Massage Therapist
                </option>
                <option value="Hair Stylist" {{ old('designation', $item->designation) == 'Hair Stylist' ? 'selected' : '' }}>
                    Hair Stylist
                </option>
                <option value="Nail Technician" {{ old('designation', $item->designation) == 'Nail Technician' ? 'selected' : '' }}>
                    Nail Technician
                </option>
                <option value="Esthetician" {{ old('designation', $item->designation) == 'Esthetician' ? 'selected' : '' }}>
                    Esthetician
                </option>
                <option value="Skincare Specialist" {{ old('designation', $item->designation) == 'Skincare Specialist' ? 'selected' : '' }}>
                    Skincare Specialist
                </option>
                <option value="Makeup Artist" {{ old('designation', $item->designation) == 'Makeup Artist' ? 'selected' : '' }}>
                    Makeup Artist
                </option>
                <option value="Spa Attendant" {{ old('designation', $item->designation) == 'Spa Attendant' ? 'selected' : '' }}>
                    Spa Attendant
                </option>
            </select>
        </div>

        <div class="col-md-12 mt-4" id="specialist-field" @if (old('designation', $item->designation) == 'Doctor') style="display: block;" @else style="display: none;" @endif>
            <!-- Specialist -->
            <label for="specialist">Specialist</label>
            <select name="specialist" id="specialist" class="form-control">
                <option value="Chief Consultant Dermatologist">Chief Consultant Dermatologist</option>
                <option value="Hair Consultant">Hair Consultant</option>
                <option value="Cosmetic Surgeon">Cosmetic Surgeon</option>
            </select>
        </div>
        <div class="col-md-12 mt-4" id="experience-field" @if (old('designation', $item->designation) == 'Doctor') style="display: block;" @else style="display: none;" @endif>
            <!-- Experience -->
            <label for="experience">Experience</label>
            <textarea name="experience" id="summernote-experience" class="form-control">{{ old('experience', $item->experience) }}</textarea>

        </div>
        <div class="col-md-12 mt-4" id="awards-field" @if (old('designation', $item->designation) == 'Doctor') style="display: block;" @else style="display: none;" @endif>
            <!-- Awards and Achievement -->
            <label for="awards">Awards and Achievement</label>
            <textarea name="awards" id="summernote-awards" class="form-control">{{ old('awards', $item->awards) }}</textarea>

        </div>
        <div class="col-md-12 mt-4">
            <!-- Skills -->
            <label for="skills">Skills *</label>
            <textarea name="skills" id="summernote" class="form-control">{{ old('skills', $item->skills) }}</textarea>
        </div>
        <div class="col-md-12 mt-4">
            <!-- Others -->
            <label for="others">Others</label>
            <textarea class="form-control" name="others" rows="1">{{ old('others', $item->others) }}</textarea>
        </div>
    </div>
</div>

@push('styles')
<style>
    /* Add custom styles here */
    .mt-4 {
        margin-top: 1.5rem;
        /* Adjust spacing as needed */
    }

</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        $('#experience-field #summernote-experience').summernote();
        $('#awards-field #summernote-awards').summernote();
        $('#role').change(function() {
            var selectedRole = $(this).val();
            if (selectedRole == 'staff') {
                $('#staff-fields').show();
                $('#qualification-field').show();
                $('#others-field').show();
                $('select[name="designation"]').trigger(
                    'change'); // Trigger change event for designation dropdown when staff is selected
            } else {
                $('#staff-fields').hide();
                $('#qualification-field').hide();
                $('#others-field').hide();
                $('#specialist-field').hide().find('select').prop('disabled', true);
            }
        });

        $('select[name="designation"]').change(function() {
            var selectedDesignation = $(this).val();
            if (selectedDesignation == 'Doctor') {
                $('#specialist-field').show().find('select').prop('disabled', false);
                $('#experience-field').show();
                $('#awards-field').show();

            } else {
                $('#specialist-field').hide().find('select').prop('disabled', true);
                $('#specialist').val(""); // Clear specialist value
                $('#experience-field').hide();
                $('#experience').val(""); // Clear experience value
                $('#awards-field').hide();
                $('#awards').val(""); // Clear awards value
            }
        });

        // Show doctor details if designation is already set to "Doctor" during editing
        if ($('select[name="designation"]').val() == 'Doctor') {

            $('#specialist-field').show();
            $('#experience-field').show();
            $('#awards-field').show();

        }

        $('#staffForm').submit(function() {
            $('#specialist-field:hidden select').prop('disabled', true);
        });

    });

</script>
@endpush
