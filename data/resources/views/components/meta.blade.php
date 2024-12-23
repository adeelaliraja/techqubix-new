<!-- An unexamined life is not worth living. - Socrates -->
@props(['title', 'description', 'keywords', 'ogImage' => null])

@push('schema')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "{{ $title }}",
        "description": "{{ $description }}",
        "publisher": {
            "@type": "Organization",
            "name": "{{ config('app.name') }}",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('images/logo.png') }}"
            }
        }
    }
</script>
@endpush

@section('meta')
    @php
        $meta = [
            'title' => $title,
            'description' => $description,
            'keywords' => $keywords,
            'og_image' => $ogImage,
        ];
    @endphp
@endsection
