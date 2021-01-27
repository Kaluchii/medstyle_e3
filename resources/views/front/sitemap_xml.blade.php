<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xhtml="http://www.w3.org/1999/xhtml">
    <url>
        <loc>{{ config('app.url') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    @foreach($services->serv_category_group as $item_category)
        @foreach($item_category->services_group as $item)
            <url>
                <loc>{{ config('app.url') }}/service/{{ $item->slug }}</loc>
                <changefreq>weekly</changefreq>
                <priority>0.9</priority>
            </url>
        @endforeach
    @endforeach
    @foreach($technologies->technologies_group as $item)
        <url>
            <loc>{{ config('app.url') }}/technology/{{ $item->slug }}</loc>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach($articles->articles_group as $item)
        <url>
            <loc>{{ config('app.url') }}/articles/{{ $item->slug }}</loc>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach($problems as $item)
        <url>
            <loc>{{ config('app.url') }}/questions/{{ $item->slug }}</loc>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach($specialists->specialists_group as $item)
        <url>
            <loc>{{ config('app.url') }}/specialist/{{ $item->slug }}</loc>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    <url>
        <loc>{{ config('app.url') }}/services</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ config('app.url') }}/technology</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ config('app.url') }}/articles</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ config('app.url') }}/helpful</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ config('app.url') }}/news</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ config('app.url') }}/about</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ config('app.url') }}/video</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ config('app.url') }}/contacts</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ config('app.url') }}/specialists</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ config('app.url') }}/questions</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ config('app.url') }}/age</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
</urlset>
