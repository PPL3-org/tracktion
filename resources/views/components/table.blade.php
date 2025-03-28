@props(['heads' => [], 'widths' => []])

<div class="overflow-hidden rounded-lg border border-gray-200 shadow-sm h-full">
    <table class="w-full border-separate border-spacing-0">
        <thead>
            <tr class="bg-[#F9FAFB] text-[#667085] text-xs font-sans text-center">
                <th class="px-2 py-2 font-medium border-b first:rounded-tl-lg last:rounded-tr-lg border-[#EAECF0] w-12">No</th>
                @foreach ($heads as $index => $head)
                    <th class="px-2 py-2 font-medium border-b border-[#EAECF0] {{ $widths[$index] ?? 'w-auto' }}">
                        {{ ucfirst($head) }}
                    </th>
                @endforeach
            </tr>
        </thead>

        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
