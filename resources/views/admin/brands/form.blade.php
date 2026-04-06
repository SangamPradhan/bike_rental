<div class="form-group row">
    <div class="col-md-6">
        <label for="name">Name *</label>
        <input type="text" required class="form-control" id="name" name="name" value="{{ old('name', $item->name) }}" placeholder="Brand Name (e.g. Royal Enfield)">
    </div>

    <div class="col-md-6">
        <label for="type">Type *</label>
        <select name="type" id="type" class="form-control" required>
            <option value="bike" {{ old('type', $item->type) == 'bike' ? 'selected' : '' }}>Bike</option>
            <option value="scooter" {{ old('type', $item->type) == 'scooter' ? 'selected' : '' }}>Scooter</option>
        </select>
    </div>

    <div class="col-md-6 mt-4">
        <label for="order">Order</label>
        <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $item->order) }}" placeholder="0" min="0">
    </div>

    <div class="col-md-6 mt-4">
        <label for="image">Logo / Image</label>
        <input type="file" class="form-control" id="image" accept="image/*" name="image">
        @if ($item->getImage())
            <div class="mt-2 text-white p-2" style="background: #333; display: inline-block;">
                <img src="{{ asset($item->getImage()) }}" alt="Brand Logo" width="100">
            </div>
        @endif
    </div>
</div>
