
<div class="cursor-pointer" wire:click="setStatus">
    @if ( $entity->hasPublished() )
    <span class="inline-flex items-center p-1 mr-2 text-sm font-semibold text-green-800 hover:bg-green-300 bg-green-100 rounded-full dark:bg-green-200 dark:text-green-800">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
    </span>
    @else
    <span class="inline-flex items-center p-1 mr-2 text-sm font-semibold text-rose-800 hover:bg-rose-300 bg-rose-100 rounded-full dark:bg-rose-200 dark:text-rose-800">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
    </span>
    @endif
</div>