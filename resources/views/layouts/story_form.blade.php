{{-- Story Title --}}
<div class="form-group has-validation">
  <label for="title">Title</label>
  <input 
    type="text" 
    name="title" 
    class="form-control @error('title') is-invalid @enderror"
    value="{{ old('title', $story->title) }}"
  >
  @error('title')
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>
{{-- Story Body --}}
<div class="form-group has-validation">
  <label for="body">Tell us your Story</label>
  <textarea 
    name="body" 
    class="form-control @error('body') is-invalid @enderror">{{ old('body', $story->body) }}
  </textarea>
  @error('body')
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>
{{-- Story Type --}}
<div class="form-group has-validation">
  <label for="type">Type</label>
  <select 
    name="type" 
    class="custom-select @error('type') is-invalid @enderror"
  >
    <option value="">-- Select --</option>
    <option 
      value="short"
      {{ 'short' == old('type', $story->type) ? 'selected' : ''}}
    >
      Short
    </option>
    <option 
      value="long"
      {{ 'long' == old('type', $story->type) ? 'selected' : ''}}
    >
      Long
    </option>
  </select>
  @error('type')
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>
{{-- Story Status --}}
<div class="form-group has-validation">
  <legend><h6>Status</h6></legend>
  <div class="form-check @error('status') is-invalid @enderror">
    <input 
      type="radio" 
      name="status" 
      class="form-check-input" 
      value="1"
      {{ '1' == old('status', $story->status) ? 'checked' : '' }}
    >
    <label for="active" class="form-check-label">Yes</label>
  </div>
  <div class="form-check">
    <input 
      type="radio" 
      name="status" 
      class="form-check-input" 
      value="0"
      {{ '0' == old('status', $story->status) ? 'checked' : ''}}
    >
    <label for="active" class="form-check-label">No</label>
  </div>
  @error('status')
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>