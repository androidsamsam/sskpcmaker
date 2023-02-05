<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//データベース操作をするときはPcmakerクラスを利用する
class Pcmaker extends Model
{
    //テーブル名
    protected $table = 'pcmakers';
    //可変項目
    protected $fillable =
    [
        'id',
        'code',
        'product',
        'pcmaker',
        'price',
        'campaign',
        'cpu',
        'gpu',
        'memory',
        'image',
        'afurl',
        'campaignurl'
    ];

}
