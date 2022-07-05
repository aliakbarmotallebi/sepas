

<form enctype="multipart/form-data">
    <input name="raw" type="file" wire:model="raw">

    <button wire:click.prevent="save()" class="btn btn-success">Save</button>
</form>
