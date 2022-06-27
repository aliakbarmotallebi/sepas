<div class="mb-2">
    
    <x-form.label :label="$label" :name="$name" :required="$required"/>

    <input type="text" 
        name="{{ $name }}" 
        class="shadow-sm border @error($name) bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500  @enderror text-sm rounded-lg block w-full p-2.5" 
        placeholder="{{$placeholder}}"
        value="{{ old($name, $value ?? '') }}"
    >
    
    <x-form.error :name="$name"/>
</div>