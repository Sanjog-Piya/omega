<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

@foreach($products as $product)
    <url>
        <loc>https://fridayintl.com/product/{{ $product->slug }}</loc>
        <lastmod>{{ date('Y-m-d', strtotime($product->updated_at)) }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
@endforeach

</urlset>
