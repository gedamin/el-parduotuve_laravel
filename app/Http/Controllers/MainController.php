<?php

namespace App\Http\Controllers;
use App\Seopost;
use App\DarbaiGallery;

use Illuminate\Http\Request;
//use Illuminate\Database\Eloquent\ModelNotFoundException;

class MainController extends Controller
{
    //    HOME page
    public function HomePage()
    {
        return view('home');
    }
    public function index()
    {
        $posts = Seopost::orderBy('created','asc')->paginate(20);
        return view('SEO-optimizacija.SEO-optimizacija', ['posts' => $posts]);
    }
    public function seoPostView($slug)
    {

//        $posts = Seopost::find($id); //vekiantis buvo kai vietoje slug id
        $posts = Seopost::where('slug', '=', $slug) -> first();
//        dd($posts);


//        return view('SEO-optimizacija.seoPostView', ['posts' => $posts]);
          return view('SEO-optimizacija.seoPostView', ['posts' => $posts]) -> withPost($posts);
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function AtliktiDarbai()
    {
        $images = DarbaiGallery::get();
        return view('atlikti-darbai.AtliktiDarbai', ['images' => $images]);

    }

//    STATIC pages
    public function ElektroninesParduotuvesKurimas()
    {
        return view('static-pages.elektronines-parduotuves-kurimas.ElektroninesParduotuvesKurimas');
    }
    public function ElektroninesParduotuvesKaina()
    {
        return view('static-pages.elektronines-parduotuves-kurimas.ElektroninesParduotuvesKaina');
    }
    public function ElektroninesParduotuvesGalimybes()
    {
        return view('static-pages.elektronines-parduotuves-kurimas.ElektroninesParduotuvesGalimybes');
    }
    public function ElektroninesParduotuvesDizainas()
    {
        return view('static-pages.elektronines-parduotuves-kurimas.ElektroninesParduotuvesDizainas');
    }

    public function ElektroninesParduotuvesKurimoEtapai()
    {
        return view('static-pages.elektronines-parduotuves-kurimas.ElektroninesParduotuvesKurimoEtapai');
    }
    public function ElektroninesParduotuvesDemonstracija()
    {
        return view('static-pages.elektronines-parduotuves-kurimas.Demonstracija');
    }
    public function ElektroninesParduotuvesParuostaParduotuve()
    {
        return view('static-pages.elektronines-parduotuves-kurimas.ParuostaInternetineParduotuve');
    }
    public function dokumentacija()
    {
        return view('static-pages.dokumentacija.dokumentacija');
    }
    public function VideoDokumentacijaOC20()
    {
        return view('static-pages.dokumentacija.video.video-oc20');
    }
    public function AprasymaiOC20()
    {
        return view('static-pages.dokumentacija.aprasymai.oc20.aprasymai');
    }

    public function NuoKoPradetiOC20()
    {
        return view('static-pages.dokumentacija.aprasymai.oc20.el-parduotuve-nuo-ko-pradeti');
    }
    public function KategorijaOC20()
    {
        return view('static-pages.dokumentacija.aprasymai.oc20.kategorija');
    }
    public function KategorijuRekomendacijos()
    {
        return view('static-pages.dokumentacija.aprasymai.oc20.kategoriju-rekomendacijos');
    }
    public function PrekeOC20()
    {
        return view('static-pages.dokumentacija.aprasymai.oc20.preke');
    }
    public function GamintojasOC20()
    {
        return view('static-pages.dokumentacija.aprasymai.oc20.gamintojas');
    }
    public function LogotipasOC20()
    {
        return view('static-pages.dokumentacija.aprasymai.oc20.logotipas');
    }
    public function PayseraOC20()
    {
        return view('static-pages.dokumentacija.aprasymai.oc20.paysera');
    }
    public function dokumentacija15()
    {
        return view('static-pages.dokumentacija.dokumentacija15');
    }
    public function VideoDokumentacijaOC15()
    {
        return view('static-pages.dokumentacija.video.video-oc15');
    }
    public function AprasymaiOC15()
    {
        return view('static-pages.dokumentacija.aprasymai.oc15.aprasymai');
    }
    public function NuoKoPradetiOC15()
    {
        return view('static-pages.dokumentacija.aprasymai.oc15.opencart-el-parduotuve-nuo-ko-pradeti');
    }
    public function KategorijaOC15()
    {
        return view('static-pages.dokumentacija.aprasymai.oc15.kategorija');
    }
    public function PrekeOC15()
    {
        return view('static-pages.dokumentacija.aprasymai.oc15.preke');
    }
    public function GamintojasOC15()
    {
        return view('static-pages.dokumentacija.aprasymai.oc15.gamintojas');
    }
    public function LogotipasOC15()
    {
        return view('static-pages.dokumentacija.aprasymai.oc15.Logotipas');
    }
    public function NemokamasPristatymasOC15()
    {
        return view('static-pages.dokumentacija.aprasymai.oc15.nemokPristatymas');
    }
    public function PervedimasPerBankaOC15()
    {
        return view('static-pages.dokumentacija.aprasymai.oc15.pervedPerBanka');
    }
    public function SkaidrineReklamaOC15()
    {
        return view('static-pages.dokumentacija.aprasymai.oc15.SkaidrineReklama');
    }
    public function AkcijosOC15()
    {
        return view('static-pages.dokumentacija.aprasymai.oc15.Akcijos');
    }
    public function FiltrasOC15()
    {
        return view('static-pages.dokumentacija.aprasymai.oc15.Filtras');
    }
    public function ValiutaOC15()
    {
        return view('static-pages.dokumentacija.aprasymai.oc15.Valiuta');
    }
    public function LogotipoSpalva()
    {
        return view('logotipu-kurimas.LogotipoSpalva');
    }
    public function GrafinisDizainas()
    {
        return view('logotipu-kurimas.GrafinisDizainas');
    }
    public function KompiuterineGrafika()
    {
        return view('logotipu-kurimas.KompiuterineGrafika');
    }
    public function Hostingas()
    {
    return view('static-pages.kiti.Hostingas');
    }
    public function Moduliai()
    {
        return view('static-pages.moduliai.moduliai');
    }
    public function pdfModulis()
    {
        return view('static-pages.moduliai.pdfSaskaita');
    }
    public function payseraModulis()
    {
        return view('static-pages.moduliai.MokejimaiPaysera');
    }
    public function atsiliepimai()
    {
        return view('static-pages.kiti.atsiliepimai');
    }









    public function contacts()
    {
        return view('static-pages.kontaktai');
    }
}