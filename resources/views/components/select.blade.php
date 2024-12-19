@props([
    'items' => [], // The collection or array of items to display
    'defaultVal' => null, // The default selected value
])

@if ($items instanceof \Illuminate\Support\Collection && $items->isNotEmpty() || is_array($items) && !empty($items))
    <select {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full']) }}>
        @foreach ($items as $item)
            <option 
                value="{{ $item->id }}"
                {{ $defaultVal == $item->id ? 'selected' : '' }}>
                {{ $item->name ?? $item->contact_name }}
            </option>
        @endforeach
    </select>
@else
    <p>No items available.</p>
@endif
