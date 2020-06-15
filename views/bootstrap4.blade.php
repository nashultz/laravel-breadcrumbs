@if (count($breadcrumbs))

    <ol class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li class="breadcrumb-item"><i class="fa {{ $breadcrumb->icon }}"></i><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item active"><i class="fa {{ $breadcrumb->icon }}"></i>{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </ol>

@endif
