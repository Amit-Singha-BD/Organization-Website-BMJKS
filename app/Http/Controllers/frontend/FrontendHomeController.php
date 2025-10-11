<?php
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Service;

class FrontendHomeController extends Controller{

    public function home_view(){
        $response = Http::get('https://mcqbankbd.com/blog/wp-json/wp/v2/posts?per_page=4&_fields=id,date,title,excerpt,link');
        $posts = $response->json();
        $services = Service::all();
        return view('frontend.pages.home', compact('services', 'posts'));
    }

}
