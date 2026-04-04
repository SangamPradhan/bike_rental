<div class="form-group row">
    <div class="col-md-6">
        <label for="">Image</label>
        <input type="file" class="form-control" accept="image/*" name="image">
        @if($item->getImage())
            <img src="{{ $item->getImage() }}" alt="" width="80%">
        @endif
    </div>
    <div class="col-md-6 mt-4">
        <label for="order">Order *</label>
        <input type="number" required class="form-control" id="order" name="order" value="{{ old('order', $item->order) }}" placeholder="Enter order position" min="0">
    </div>
</div>
