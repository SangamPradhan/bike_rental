<div class="form-group row">
    <!-- Brand Field -->
    <div class="col-md-6">
        <label for="brand_id">Brand *</label>
        <select name="brand_id" id="brand_id" class="form-control" required>
            <option value="">Select Brand</option>
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}" {{ old('brand_id', $item->brand_id) == $brand->id ? 'selected' : '' }}>{{ $brand->name }} ({{ ucfirst($brand->type) }})</option>
            @endforeach
        </select>
    </div>

    <!-- Title Field -->
    <div class="col-md-6">
        <label for="title">Model Name / Title *</label>
        <input type="text" required class="form-control" id="title" name="title" value="{{ old('title', $item->title) }}" placeholder="e.g. Himalayan 450">
    </div>

    <!-- Engine CC -->
    <div class="col-md-4 mt-4">
        <label for="engine_cc">Engine CC *</label>
        <input type="text" required class="form-control" id="engine_cc" name="engine_cc" value="{{ old('engine_cc', $item->engine_cc) }}" placeholder="e.g. 452cc">
    </div>

    <!-- KMPL -->
    <div class="col-md-4 mt-4">
        <label for="kmpl">Mileage (KMPL) *</label>
        <input type="text" required class="form-control" id="kmpl" name="kmpl" value="{{ old('kmpl', $item->kmpl) }}" placeholder="e.g. 30kmpl">
    </div>

    <!-- Fuel Tank -->
    <div class="col-md-4 mt-4">
        <label for="fuel_tank_capacity">Fuel Tank Capacity *</label>
        <input type="text" required class="form-control" id="fuel_tank_capacity" name="fuel_tank_capacity" value="{{ old('fuel_tank_capacity', $item->fuel_tank_capacity) }}" placeholder="e.g. 17L">
    </div>

    <!-- Rate Per Day -->
    <div class="col-md-6 mt-4">
        <label for="rate_per_day">Rate Per Day Inside Valley (Nrs.) *</label>
        <input type="number" required class="form-control" id="rate_per_day" name="rate_per_day" value="{{ old('rate_per_day', $item->rate_per_day) }}" placeholder="e.g. 1500" min="0" step="0.01">
    </div>

    <!-- Rate Per Day Outside Valley -->
    <div class="col-md-6 mt-4">
        <label for="rate_per_day_outside_valley">Rate Per Day Outside Valley (Nrs.) *</label>
        <input type="number" required class="form-control" id="rate_per_day_outside_valley" name="rate_per_day_outside_valley" value="{{ old('rate_per_day_outside_valley', $item->rate_per_day_outside_valley) }}" placeholder="e.g. 2500" min="0" step="0.01">
    </div>

    <!-- Order Field -->
    <div class="col-md-6 mt-4">
        <label for="order">Display Order</label>
        <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $item->order) }}" placeholder="0" min="0">
    </div>

    <!-- Type Field -->
    <div class="col-md-6 mt-4">
        <label for="type">Vehicle Type *</label>
        <select name="type" id="type" class="form-control" required>
            <option value="bike" {{ old('type', $item->type) == 'bike' ? 'selected' : '' }}>Bike</option>
            <option value="scooter" {{ old('type', $item->type) == 'scooter' ? 'selected' : '' }}>Scooter</option>
        </select>
    </div>

    <!-- Image Upload Field -->
    <div class="col-md-6 mt-4">
        <label for="image">Vehicle Image</label>
        <input type="file" class="form-control" id="image" accept="image/*" name="image">
        @if ($item->getImage())
            <img src="{{ asset($item->getImage()) }}" alt="Vehicle Image" width="200" class="mt-2 border">
        @endif
    </div>

    <!-- Toggles -->
    <div class="col-md-6 mt-4">
        <div class="custom-control custom-switch mt-4">
            <input type="checkbox" class="custom-control-input" id="is_promoted" name="is_promoted" {{ old('is_promoted', $item->is_promoted) ? 'checked' : '' }}>
            <label class="custom-control-label" for="is_promoted">Promote this Vehicle (Featured)</label>
        </div>
    </div>

    <div class="col-md-6 mt-4">
        <div class="custom-control custom-switch mt-4">
            <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" {{ old('is_active', $item->is_active ?? true) ? 'checked' : '' }}>
            <label class="custom-control-label" for="is_active">Visible on Website (Active Status)</label>
        </div>
    </div>

    <!-- Description Field -->
    <div class="col-12 mt-4">
        <label for="description">Detailed Specs / Description</label>
        <textarea name="description" id="summernote" class="form-control">{{ old('description', $item->description) }}</textarea>
    </div>
</div>
