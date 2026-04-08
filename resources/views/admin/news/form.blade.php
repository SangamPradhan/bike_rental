<div class="form-group row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <label for="">Title *</label>
                <input type="text" required class="form-control" name="title" value="{{ old('title', $item->title) }}">
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

    <div class="col-md-6 mt-4">
        <label for="order">Order *</label>
        <input type="number" required class="form-control" id="order" name="order"
            value="{{ old('order', $item->order) }}" placeholder="Enter order position" min="0">
    </div>

    <div class="col-md-6 mt-4">
        <label for="tag">Tag *</label>
        <input type="text" required class="form-control" id="tag" name="tag" value="{{ old('tag', $item->tag) }}"
            placeholder="Enter tag">
    </div>

    <div class="col-12 mt-4">
        <label for="">Description *</label>
        <textarea name="description" id="summernote" class="form-control"
            style="width: 100%; height: 200px;">{!! old('description', $item->description) !!}</textarea>
    </div>
</div>