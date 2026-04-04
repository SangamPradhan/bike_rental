<div class="form-group row">
    <!-- Title Field -->
    <div class="col-md-6">
        <label for="title">Title *</label>
        <input type="text" required class="form-control" id="title" name="title" value="{{ old('title', $item->title) }}" placeholder="Service Title">
    </div>

    <!-- Price One -->
    <div class="col-md-6">
        <label for="price">Price One (Rs.) *</label>
        <input type="number" required class="form-control" id="price" name="price" value="{{ old('price', $item->price) }}" placeholder="6000" min="0" step="0.01">
    </div>

    <!-- Price Two -->
    <div class="col-md-6 mt-4">
        <label for="price_two">Price Two (Rs.)</label>
        <input type="number" class="form-control" id="price_two" name="price_two" value="{{ old('price_two', $item->price_two) }}" placeholder="Optional" min="0" step="0.01">
    </div>

    <!-- Price Three -->
    <div class="col-md-6 mt-4">
        <label for="price_three">Price Three (Rs.)</label>
        <input type="number" class="form-control" id="price_three" name="price_three" value="{{ old('price_three', $item->price_three) }}" placeholder="Optional" min="0" step="0.01">
    </div>

    <!-- Time One -->
    <div class="col-md-4 mt-4">
        <label for="time_one">Time One (minutes)</label>
        <input type="number" class="form-control" id="time_one" name="time_one" value="{{ old('time_one', $item->time_one) }}" min="15" max="150" placeholder="Default 15">
    </div>

    <!-- Time Two -->
    <div class="col-md-4 mt-4">
        <label for="time_two">Time Two (minutes)</label>
        <input type="number" class="form-control" id="time_two" name="time_two" value="{{ old('time_two', $item->time_two) }}" min="15" max="150" placeholder="Optional">
    </div>

    <!-- Time Three -->
    <div class="col-md-4 mt-4">
        <label for="time_three">Time Three (minutes)</label>
        <input type="number" class="form-control" id="time_three" name="time_three" value="{{ old('time_three', $item->time_three) }}" min="15" max="150" placeholder="Optional">
    </div>

    <!-- Category Field -->
    <div class="col-md-6 mt-4">
        <label for="category">Category *</label>
        <select name="category" id="category" class="form-control" required>
            <option value="">Select Category</option>
            <option value="bodyTreatment" {{ old('category', $item->category) == 'bodyTreatment' ? 'selected' : '' }}>Body Treatment</option>
            <option value="facialTreatment" {{ old('category', $item->category) == 'facialTreatment' ? 'selected' : '' }}>Facial Treatment</option>
            <option value="massagetherapy" {{ old('category', $item->category) == 'massagetherapy' ? 'selected' : '' }}>Massage Therapy</option>
            <option value="nailCare" {{ old('category', $item->category) == 'nailCare' ? 'selected' : '' }}>Nail Care</option>
            <option value="skinCare" {{ old('category', $item->category) == 'skinCare' ? 'selected' : '' }}>Skin Care</option>
            <option value="spaServices" {{ old('category', $item->category) == 'spaServices' ? 'selected' : '' }}>Spa Services</option>
            <option value="hairCare" {{ old('category', $item->category) == 'hairCare' ? 'selected' : '' }}>Hair Care</option>
        </select>
    </div>

    <!-- Order Field -->
    <div class="col-md-6 mt-4">
        <label for="order">Order *</label>
        <input type="number" required class="form-control" id="order" name="order" value="{{ old('order', $item->order) }}" placeholder="Enter order position" min="0">
    </div>

    <!-- Image Upload Field -->
    <div class="col-md-6 mt-4">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" accept="image/*" name="image">
        @if ($item->getImage())
        <img src="{{ $item->getImage() }}" alt="Uploaded Image" width="30%" class="mt-2">
        @endif
    </div>

    <!-- Description Field -->
    <div class="col-12 mt-4">
        <label for="description">Description *</label>
        <textarea name="description" id="summernote" class="form-control" required>{!! old('description', $item->description) !!}</textarea>
    </div>
</div>
