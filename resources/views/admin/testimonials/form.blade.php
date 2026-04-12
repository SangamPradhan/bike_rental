<div class="form-group row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <label for=""> Name *</label>
                <input type="text" required class="form-control" name="name" value="{{ old('name', $item->name) }}"
                    placeholder="John Smith">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="">Image</label>
        <input type="file" class="form-control" accept="image/*" name="image">
        @if ($item->getImage())
            <img src="{{ $item->getImage() }}" alt="" width="30%">
        @endif
    </div>
    <div class="col-md-4 mt-4">
        <label for="country">Location / Country</label>
        <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $item->country) }}" placeholder="e.g. London, UK">
    </div>
    <div class="col-md-4 mt-4">
        <label for="rating">Rating (Stars) *</label>
        <select name="rating" id="rating" class="form-control" required>
            @for ($i = 5; $i >= 1; $i--)
                <option value="{{ $i }}" {{ old('rating', $item->rating) == $i ? 'selected' : '' }}>{{ $i }} Stars</option>
            @endfor
        </select>
    </div>
    <div class="col-md-4 mt-4">
        <label for="order">Order *</label>
        <input type="number" required class="form-control" id="order" name="order" value="{{ old('order', $item->order) }}" placeholder="Enter order position" min="0">
    </div>
    <div class="col-12 mt-4">
        <label for="">Message *</label>
        <textarea name="message" id="summernote" class="form-control">{!! old('message', $item->message) !!}</textarea>
    </div>
</div>
