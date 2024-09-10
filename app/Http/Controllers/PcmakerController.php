<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pcmaker;

class PcmakerController extends Controller
{
    /**
     *PC詳細を表示する
     *@return view
     */

    public function pcallshowList()
    { 
       $pcmakers = Pcmaker::all();

        return view('pcmaker.pcsearch',
        ['pcmakers'=>$pcmakers]);
    }
    public function pcshowList(Request $request){
        $brand = $request->input('brand');
        $cpu = $request->input('cpu');
        $gpu = $request->input('gpu');
        $memory = $request->input('memory');
        $campaign = $request->input('campaign');
      
        $pcmakers = Pcmaker::query()
        ->when(!is_null($brand), function($query) use ($brand)
            {$query->whereIn('pcmaker',$brand);
          })


          ->when(!is_null($cpu), function($query) use ($cpu)
          {$query->whereIn('cpu',$cpu);
        })

          ->when(!is_null($gpu), function($query) use ($gpu) 
          {$query->whereIn('gpu',$gpu);
        })

        ->when(!is_null($memory), function($query) use ($memory) 
        {$query->whereIn('memory',$memory);
      })
      ->when(!is_null($campaign), function($query) use ($campaign) 
      {$query->whereIn('campaign',$campaign);
    })

      ->get();


        return view('pcmaker.pcsearch', ['brand' => $brand, 'pcmakers' => $pcmakers]);
      }

      /** 
       * 記事詳細表示 
       * @param int $id
       * @return view
     */
        public function memoshowList(Request $request , $id){ 
        $pcmakers = Pcmaker::find($id);
        $image = $request->input('image');
        $cpu = $request->input('cpu');
        $gpu = $request->input('gpu');
        $memory = $request->input('memory');
        $storage = $request->input('storage');
        $power = $request->input('power');
        $price = $request->input('price');
        $campaign = $request->input('campaign');
        $coment = $request->input('coment');
        /* if (is_null($pcmakers)){
            \session::flash('err_msg','データがありません');
            return redirect(route('pcall'));
         } */
         return view('pcmaker.memo', ['image' => $image,'pcmakers'=>$pcmakers]);
          return view('pcmaker.memo', ['cpu' => $cpu,'pcmakers'=>$pcmakers]);
          return view('pcmaker.memo', ['gpu' => $gpu,'pcmakers'=>$pcmakers]);
          return view('pcmaker.memo', ['memory' => $memory,'pcmakers'=>$pcmakers]);
          return view('pcmaker.memo', ['storage' => $storage,'pcmakers'=>$pcmakers]);
          return view('pcmaker.memo', ['power' => $power,'pcmakers'=>$pcmakers]);
          return view('pcmaker.memo', ['price' => $price,'pcmakers'=>$pcmakers]);
          return view('pcmaker.memo', ['campaign' => $campaign,'pcmakers'=>$pcmakers]);
          return view('pcmaker.memo', ['coment' => $campaign,'pcmakers'=>$pcmakers]);
      }

}

