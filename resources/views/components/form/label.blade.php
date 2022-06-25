<label class="block mb-2 text-sm font-medium @error($name) text-red-700 @enderror">
    {{ $label }}
    @if( $hasRequired() )
        <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
    @endif
</label>