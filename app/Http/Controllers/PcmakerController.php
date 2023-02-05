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
}

