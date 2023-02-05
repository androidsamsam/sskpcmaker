<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pcmaker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pcmaker::truncate();
        $csvData = fopen(base_path('database/csv/pcmaker_data.csv'),'r');

        $transRaw = true;
        while (($data =fgetcsv($csvData,'1000000',',')) !==false){
                if(! $transRaw){
                    Pcmaker::create([
                        'code' => $data[0],
                        'product' => $data[1],
                        'pcmaker' => $data[2],
                        'price' => $data[3],
                        'campaign' => $data[4],  
                        'cpu' => $data[5],
                        'gpu' => $data[6],
                        'memory' => $data[7],
                        'image' => $data[8],
                        'afurl' => $data[9],
                        'campaignurl'=> $data[10]
                    ]);
                }
                $transRaw = false;
        }
        fclose($csvData);
    }
}
