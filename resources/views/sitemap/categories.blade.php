<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

@foreach($categories as $category)
    <url>
        <loc>https://fridayintl.com/category/{{ $category->slug }}</loc>
        <lastmod>{{ date('Y-m-d', strtotime($category->updated_at)) }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
@endforeach

</urlset>