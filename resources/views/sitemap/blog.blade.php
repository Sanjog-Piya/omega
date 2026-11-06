<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

@foreach($blogs as $blog)
    <url>
        <loc>https://fridayintl.com/blog/{{ $blog->slug }}</loc>
        <lastmod>{{ date('Y-m-d', strtotime($blog->updated_at)) }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
@endforeach

</urlset>