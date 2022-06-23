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
            {{ $slot }}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead {{ $header->attributes->class([
                            'text-center text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'
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
