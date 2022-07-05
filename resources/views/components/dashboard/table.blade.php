@props([
    'heading',
    'content',
])

<!-- Cart -->
<section class="cart mt-4 rounded-t-md print:rounded-none" {{ $attributes->get('class') }} >
    <div class="rounded-xl border print:shadow-none print:rounded-none shadow-md bg-white">
        <div class="cart__title flex w-full items-center justify-between border-b p-5 pb-3">
            <span class="font-semibold">
                {{ $title }}
            </span>
        </div>
        <div class="cart__content">
            {{ $slot }}
            <div class="relative overflow-x-auto print:shadow-none print:rounded-none shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead {{ $header->attributes->class([
                            'text-center text-xs text-gray-700 uppercase bg-gray-50'
                            ]) }}>
                        {{ $header }}
                    </thead>
                    <tbody {{ $content->attributes->class('text-right') }}>
                        {{ $content }}
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</section>
<!-- /Cart -->
