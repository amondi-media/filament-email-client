<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}') }">
        <!-- Interact with the `state` property in Alpine.js -->
        <div x-html="state" class="border bg-gray-50 rounded-lg p-2 text-gray-900"></div>
    </div>
</x-dynamic-component>
