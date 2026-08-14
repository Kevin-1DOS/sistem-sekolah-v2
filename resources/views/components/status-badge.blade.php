

@if ($status === 'active')
    <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 text-center">
        Aktif
    </span>
@else
    <span class="inline-flex items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 text-center">
        Tidak Aktif
    </span>
@endif
