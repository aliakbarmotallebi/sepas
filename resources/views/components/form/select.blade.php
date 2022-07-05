
<div class="mb-2">
    
    <x-form.label :label="$label" :name="$name" :required="$required"/>

    <select class="categories form-select appearance-none block w-full
        px-3 py-2 mt-1 bg-white border rounded-lg transition ease-in-outtext-gray-700 m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error($name) bg-red-50 border-red-500 text-red-900 disabled:cursor-not-allowed placeholder-red-700 focus:ring-red-500 focus:border-red-500  @enderror"
            name="{{ $name }}"
            @if($readonly)
            disabled readonly
            @endif>

            @if( $placeholder )
            <option selected> 
                {{$placeholder}}
            </option>
            @endif
            @foreach($options as $value => $label)
            <option value="{{$value}}" 
            {{ $selected == $value ? 'selected' : NULL}}
            >
                {{$label}}
            </option>
            @endforeach
    </select>
    
    <x-form.error :name="$name"/>
</div>