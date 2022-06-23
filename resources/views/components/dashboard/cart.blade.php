@props([
    'heading',
    'content',
])

<!-- Cart -->
<section class="cart mt-4 rounded-t-md" {{ $attributes->get('class') }} >
    <div class="rounded-xl border shadow-md bg-white">
        <div class="cart__title flex w-full items-center justify-between border-b p-5 pb-3">
            <span class="font-semibold">
                {{ $title }}
            </span>
        </div>
        <div class="cart__content">
            <div {{ $header->attributes->class([
                    'flex px-5 py-3 w-full'
                    ]) }}>
                {{ $header }}
            </div>

            {{ $slot }}

            <div {{ $content->attributes->get('class') }}>
                {{ $content }}
            </div>
        </div>
    </div>
</section>
<!-- /Cart -->
