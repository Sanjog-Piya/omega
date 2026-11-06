<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Page;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    // MAIN SITEMAP INDEX
 // SitemapController.php

public function index() 
{
    
        $xml = view('sitemap.index')->render();

    return response($xml, 200)
        ->header('Content-Type', 'application/xml; charset=UTF-8');

}
 
public function sitemaphome()
{
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' .
    '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <sitemap>
            <loc>https://fridayintl.com/sitemap-products.xml</loc>
            <lastmod>2026-06-12</lastmod>
        </sitemap>
        <sitemap>
            <loc>https://fridayintl.com/sitemap-categories.xml</loc>
            <lastmod>2026-06-12</lastmod>
        </sitemap>
        <sitemap>
            <loc>https://fridayintl.com/sitemap-blog.xml</loc>
            <lastmod>2026-06-12</lastmod>
        </sitemap>
    </sitemapindex>';

    return response($xml, 200)
        ->header('Content-Type', 'application/xml; charset=UTF-8')
        ->header('Cache-Control', 'no-cache, no-store, must-revalidate');
}

    // PRODUCT SITEMAP (we will build next step)
public function products()
{
    $products = Product::select('slug', 'updated_at')->get();

    $xml = view('sitemap.products', compact('products'))->render();

    return response($xml, 200)
        ->header('Content-Type', 'application/xml; charset=UTF-8');
}
    // CATEGORY SITEMAP
public function categories()
{
    $categories = Category::select('slug', 'updated_at')->get();

    $xml = view('sitemap.categories', compact('categories'))->render();

    return response($xml, 200)
        ->header('Content-Type', 'application/xml; charset=UTF-8');
}

    // BLOG SITEMAP  
public function blogs()
{
    $blogs = Blog::select('slug', 'updated_at')->get();

    $xml = view('sitemap.blog', compact('blogs'))->render();

    return response($xml, 200)
        ->header('Content-Type', 'application/xml; charset=UTF-8');
}

public function robots()
{
    $content = "User-agent: *\n";
    $content .= "Allow: /\n\n";

    $content .= "Disallow: /cart\n";
    $content .= "Disallow: /checkout\n";
    $content .= "Disallow: /account\n";
    $content .= "Disallow: /search\n";
    $content .= "Disallow: /admin\n\n";

    $content .= "Sitemap: https://fridayintl.com/sitemap.xml\n";
    $content .= "Sitemap: https://fridayintl.com/sitemap-products.xml\n";
    $content .= "Sitemap: https://fridayintl.com/sitemap-index.xml\n";

    return response($content, 200)
        ->header('Content-Type', 'text/plain');
}

    // PAGES SITEMAP
    public function pages()
    {
        return response()
            ->view('sitemap.pages')
            ->header('Content-Type', 'text/xml');
    }

    // IMAGES SITEMAP
    public function images()
    {
        return response()
            ->view('sitemap.images')
            ->header('Content-Type', 'text/xml');
    }
}