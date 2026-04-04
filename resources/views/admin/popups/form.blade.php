<div class="form-group row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <label for=""> Title *</label>
                <input type="title" required class="form-control" name="title" value="{{ old('title', $item->title) }}">
            </div>

            <div class="col-12 mt-4">
                <label for="">Url *</label>
                <textarea name="url" class="form-control">{{ old('url', $item->url) }}</textarea>

            </div>
            <div class="col-md-12 mt-4">
                <label for="">Status *</label>
                <select name="status" class="form-control">
                    <option value="active" {{ old('status', $item->status) == 'active' ? 'selected' : '' }}>Active
                    </option>
                    <option value="inactive" {{ old('status', $item->status) == 'inactive' ? 'selected' : '' }}>Inactive
                    </option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="">Image *</label>
        <input type="file" class="form-control" accept="image/*" name="image">
        @if ($item->getImage())
            <img src="{{ $item->getImage() }}" alt="" width="30%">
        @endif
        <div class="col-md-12 mt-4">
            <label for="">Button Text *</label>
            <textarea name="text" class="form-control">{!! old('text', $item->text) !!}</textarea>
        </div>

    </div>

</div>
