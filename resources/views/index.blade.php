@php
$terms = $terms->reverse()
@endphp
<x-layout>
    @foreach($terms as $index => $term)
        <x-terms :$index :$term/>
    @endforeach
</x-layout>
