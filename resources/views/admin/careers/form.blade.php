<div class="row mb-3">
    <div class="col-md-6">
        <label for="position">Position *</label>
        <input type="text" required class="form-control" name="position" value="{{ old('position', $item->position) }}">
    </div>
    <div class="col-md-6">
        <label for="contract">Contract Type *</label>
        <select class="form-control" name="contract" required>
            <option value="fixed term contract"
                {{ old('contract', $item->contract) == 'fixed term contract' ? 'selected' : '' }}>Fixed Term Contract
            </option>
            <option value="temporary contract"
                {{ old('contract', $item->contract) == 'temporary contract' ? 'selected' : '' }}>Temporary Contract
            </option>
        </select>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-4">
        <div class="form-group">
            <label for="timing">Timing *</label>
            <select class="form-control" name="timing" required>
                <option value="full time" {{ old('timing', $item->timing) == 'full time' ? 'selected' : '' }}>Full Time
                </option>
                <option value="part time" {{ old('timing', $item->timing) == 'part time' ? 'selected' : '' }}>Part Time
                </option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="status">Status *</label>
            <select class="form-control" name="status" required>
                <option value="vacancy open" {{ old('status', $item->status) == 'vacancy open' ? 'selected' : '' }}>
                    Vacancy Open</option>
                <option value="vacancy closed" {{ old('status', $item->status) == 'vacancy Closed' ? 'selected' : '' }}>
                    Vacancy Closed</option>
                <option value="still hiring" {{ old('status', $item->status) == 'still hiring' ? 'selected' : '' }}>
                    Still hiring</option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="vacancy">No. of Vacancy *</label>
            <input type="text" required class="form-control" name="vacancy"
                value="{{ old('vacancy', $item->vacancy) }}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="description">Description *</label>
            <textarea required class="form-control form-control-lg custom-font-size" id="summernote" name="description"
                rows="5">{{ old('description', $item->description) }}</textarea>
        </div>
    </div>
</div>
