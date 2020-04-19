<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Corona;
use App\Indonesia;

class KawalController extends Controller
{
    public function index()
    {
        /*
        //CREATE DATA PROVINSI STRAT
        $response = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'));
        
        if (empty($response)){

        }
        else{
            foreach ($response as $sku) {
                $corona = Corona::create([
                    'kode_provinsi' => $sku->attributes->Kode_Provi,
                    'FID' => $sku->attributes->FID,
                    'provinsi' => $sku->attributes->Provinsi,
                    'kasus_positif' => $sku->attributes->Kasus_Posi,
                    'sembuh' => $sku->attributes->Kasus_Semb,
                    'meninggal' => $sku->attributes->Kasus_Meni
                ]);
            }
        }
        //CREATE DATA PROVINSI END
        */
        
/*
        //UPDATE DATA SELURUH PROVINSI START
        $response = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/'));
            foreach ($response as $sku) {
                $corona_data = [
                    'kasus_positif' => $sku->attributes->Kasus_Posi,
                    'sembuh' => $sku->attributes->Kasus_Semb,
                    'meninggal' => $sku->attributes->Kasus_Meni
                ];
                $id = $sku->attributes->FID;
                Corona::where('FID', $id)->update($corona_data);
                echo "berhasil di Update";
            
        }
        //UPDATE DATA SELURUH PROVINSI END
*/
        
        $data = Corona::all();
        $indo = Indonesia::all()->first();
        $id = 21;
        $central = $data->find($id);
        $rawat = $central->kasus_positif - $central->sembuh - $central->meninggal;
        return view('index',compact('data', 'indo', 'central', 'rawat'));
        
    }
    public function store($response)
    {

    }

}
