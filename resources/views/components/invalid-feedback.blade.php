@props(['name'])

<div class="invalid-feedback">
    @error($name)
        <strong>{{$message}}</strong> {{-- 🍀 this will automatically detect the context of the error and print the right one --}}
    @enderror
</div>