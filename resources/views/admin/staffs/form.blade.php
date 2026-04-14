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
                <!-- Designation -->
                <label for="designation">Designation *</label>
                <input type="text" required class="form-control" name="designation" id="designation" value="{{ old('designation', $item->designation) }}" placeholder="e.g. Master Mechanic, Expedition Guide">
                <small class="form-text text-muted">Common: Owner, Manager, Master Mechanic, Expedition Guide, Safety Officer</small>
            </div>

            <div class="col-md-12 mt-4">
                <div class="form-check">
                    <input type="hidden" name="is_founder" value="0">
                    <input type="checkbox" class="form-check-input" name="is_founder" id="is_founder" value="1" {{ old('is_founder', $item->is_founder) ? 'checked' : '' }}>
                    <label class="form-check-label font-weight-bold" for="is_founder">Is Featured Founder?</label>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <!-- Introduction -->
                <label for="introduction">Bio/Introduction *</label>
                <textarea required class="form-control summernote" name="introduction" id="introduction" rows="5">{{ old('introduction', $item->introduction) }}</textarea>
            </div>

            <div class="col-md-12 mt-4">
                <!-- Quote (For Founders) -->
                <label for="quote">Personal Quote (Featured on Team Page)</label>
                <textarea class="form-control" name="quote" id="quote" rows="3" placeholder="The summit isn't just a destination...">{{ old('quote', $item->quote) }}</textarea>
            </div>
        </div>
    </div>

    <!-- Right Column -->
    <div class="col-md-6">
        <!-- Image -->
        <label for="image" class="d-block">Profile Image</label>
        <div class="mb-3">
            @if ($item->getImage())
            <img src="{{ $item->getImage() }}" alt="" class="img-thumbnail mb-2" style="max-height: 150px;">
            @endif
            <input type="file" class="form-control" accept="image/*" name="image">
        </div>

        <div class="row">
            <div class="col-md-6 mt-4">
                <!-- Languages -->
                <label for="languages">Languages</label>
                <input type="text" class="form-control" name="languages" id="languages" value="{{ old('languages', $item->languages) }}" placeholder="English, Nepali, Tibetan">
            </div>
            <div class="col-md-6 mt-4">
                <!-- Machine of Choice -->
                <label for="fav_bike_id">Machine of Choice</label>
                <select name="fav_bike_id" id="fav_bike_id" class="form-control">
                    <option value="">-- Select Vehicle --</option>
                    @foreach($vehicles as $vehicle)
                    <option value="{{ $vehicle->id }}" {{ old('fav_bike_id', $item->fav_bike_id) == $vehicle->id ? 'selected' : '' }}>
                        {{ $vehicle->title }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mt-4">
                <!-- Experience -->
                <label for="experience">Experience (Years/Text)</label>
                <input type="text" class="form-control" name="experience" id="experience" value="{{ old('experience', $item->experience) }}" placeholder="12+ Years">
            </div>
            <div class="col-md-6 mt-4">
                <!-- Phone -->
                <label for="phone">Contact Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', $item->phone) }}" placeholder="+977 ...">
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <!-- Email -->
            <label for="email">Email Address</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $item->email) }}" placeholder="example@example.com">
        </div>

        <div class="row mt-4">
            <div class="col-12"><label class="font-weight-bold">Social Profiles</label></div>
            <div class="col-md-6 mb-2">
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fab fa-facebook"></i></span></div>
                    <input type="text" class="form-control" name="social_facebook" value="{{ old('social_facebook', $item->social_facebook) }}" placeholder="Facebook URL">
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fab fa-instagram"></i></span></div>
                    <input type="text" class="form-control" name="social_instagram" value="{{ old('social_instagram', $item->social_instagram) }}" placeholder="Instagram URL">
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fab fa-twitter"></i></span></div>
                    <input type="text" class="form-control" name="social_twitter" value="{{ old('social_twitter', $item->social_twitter) }}" placeholder="Twitter URL">
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fab fa-linkedin"></i></span></div>
                    <input type="text" class="form-control" name="social_linkedin" value="{{ old('social_linkedin', $item->social_linkedin) }}" placeholder="LinkedIn URL">
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <!-- Skills -->
            <label for="skills">Skills & Expertise (Comma separated or List)</label>
            <textarea name="skills" class="form-control" rows="2">{{ old('skills', $item->skills) }}</textarea>
        </div>
    </div>
</div>

@push('styles')
<style>
    .mt-4 { margin-top: 1.5rem; }
    .form-check-input { width: 1.25rem; height: 1.25rem; margin-top: 0.15rem; }
    .form-check-label { margin-left: 0.5rem; }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 150,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
            ]
        });
    });
</script>
@endpush
