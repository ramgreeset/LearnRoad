<form method="POST" action="/{{$term->id}}" class="flex">
    @csrf
    @method('DELETE')
<div class="flex text-sm w-1/2 bg-gray-100 rounded-l mb-2 p-2">
{{ $index + 1}} . {{ $term->title }}
</div>
<button class="mb-2 p-2 bg-violet-500 rounded-r">
<x-icon name="trash" class="size-6 fill-white"/>
</button>
</form>


