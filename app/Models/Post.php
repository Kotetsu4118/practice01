<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
    'title',
    'body',
    ];
    
    use HasFactory;
    public function getPaginateByLimit(int $limit_count = 5){
    // updated_atで降順に並べたあと、limitで件数制限をかける
        // return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    /*
        $this:対象のtable
        orderBy('並び変えの基準属性', '昇順or降順')：レコードの並び替え
        limit(何件まで取得するか):何件まで取得するか
        get():オブジェクト(?)の取得
    */
         return $this->orderBy('updated_at', 'DESC')->Paginate($limit_count);
    
    }
    
}
