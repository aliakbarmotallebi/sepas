<form action="{{ route('dashboard.products.update', $product) }}" method="post">
                   
    @csrf
    @method('PUT')
    
    <div class="grid grid-cols-2 px-5 pb-5 gap-2">

        <x-form.input label="عنوان محصول" name="title" value="{{ $product->title }}" required/>

        <x-form.input label="قیمت محصول" name="price" value="{{ $product->getRawOriginal('price') }}" required/>

        <div class="col-span-2"> 
            <x-form.textarea label="توضیحات محصول" value="{{ $product->description }}" name="description" required/>
        </div>

        <x-form.file-upload/>

        <div class="col-span-2 border-t">
               <x-form.button label="ویرایش محصول"/>
        </div>

    </div>
</form>