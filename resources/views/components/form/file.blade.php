<div class="mb-2">

    <x-form.label :label="$label" :name="$name" :required="$required"/>

    <input type="file" 
        name="{{ $name }}" 
        class="shadow-sm bg-white border @error($name) bg-red-50 border-red-500 text-red-900 disabled:cursor-not-allowed placeholder-red-700 focus:ring-red-500 focus:border-red-500  @enderror text-sm rounded-lg block w-full p-2" 
        placeholder="{{$placeholder}}"
        @if($readonly)
            disabled readonly
        @endif
        value="{{ old($name, $value ?? '') }}"
        
    >
    
    <x-form.error :name="$name"/>
</div>