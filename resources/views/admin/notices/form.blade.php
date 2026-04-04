<div class="form-group row">
    <div class="col-md-12">
        <label for="">Title *</label>
        <input type="text" required class="form-control" name="title" value="{{ old('title', $item->title) }}" placeholder="Enter title">
    </div>
</div>
<div class="form-group row">
    <div class="col-md-12">
        <label for="">Message *</label>
        <textarea name="message" placeholder="Enter message" class="form-control">{{ old('message', $item->message) }}</textarea>
    </div>
</div>
