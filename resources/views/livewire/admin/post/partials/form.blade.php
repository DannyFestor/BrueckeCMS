<x-input.text model="title" name="title" value="{{ old('title') }}">Title
</x-input.text>

<x-input.text model="uri" name="uri" value="{{ old('uri') }}">URI
</x-input.text>

<x-input.text-area model="excerpt" name="excerpt">
    <x-slot name="label">Excerpt</x-slot>
    {{ old('excerpt') }}
</x-input.text-area>

<div class="flex flex-row">
    <label class="w-full md:w-3/12" for="post_type_id">Post Type</label>
    <select class="w-full md:w-9/12" name="post_type_id" id="post_type_id" wire:model="post_type_id">
        <option value="0">--- Choose a Post Type ---</option>
        @foreach ($posttypes as $posttype)
        <option value="{{ $posttype->id }}">{{ $posttype->name }}</option>
        @endforeach
    </select>
</div>

<x-input.text model="mimetype" name="mimetype" value="{{ old('mimetype') }}">Mime Type
</x-input.text>

<div>
    TODO: PLACEHOLDER FOR IMAGE ID
</div>

<x-input.text-area model="body" name="body">
    <x-slot name="label">Body</x-slot>
    {{ old('body') }}
</x-input.text-area>
