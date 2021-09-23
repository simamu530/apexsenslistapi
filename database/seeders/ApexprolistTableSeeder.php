<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Apexprolist;

class ApexprolistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'チーム' => 'smm1',
            '名前' => 'simamu1',
            'DPI' => 800,
            'マウス感度' => 1.6,
            '倍率感度' => 1.6,
            'Hz' => 1000,
            '視野角' => 104,
            'マウス'=> 'Gpro',
            'モニター' => 'Qnix',
            'GPU' => '1080',
            '解像度' => '1080×1080',
            'マウスパッド' => 'G640',
            'キーボード' => 'Realforce',
            'ヘッドセット' => 'IEpro40',
        ];
        $apexprolistdetail = new Apexprolist;
        $apexprolistdetail ->fill($param)->save();
        $param = [
            'チーム' => 'smm2',
            '名前' => 'simamu2',
            'DPI' => 800,
            'マウス感度' => 1.6,
            '倍率感度' => 1.6,
            'Hz' => 1000,
            '視野角' => 104,
            'マウス' => 'Gpro',
            'モニター' => 'Qnix',
            'GPU' => '1080',
            '解像度' => '1080×1080',
            'マウスパッド' => 'G640',
            'キーボード' => 'Realforce',
            'ヘッドセット' => 'IEpro40',
        ];
        $apexprolistdetail = new Apexprolist;
        $apexprolistdetail->fill($param)->save();
        $param = [
            'チーム' => 'smm3',
            '名前' => 'simamu3',
            'DPI' => 800,
            'マウス感度' => 1.6,
            '倍率感度' => 1.6,
            'Hz' => 1000,
            '視野角' => 104,
            'マウス' => 'Gpro',
            'モニター' => 'Qnix',
            'GPU' => '1080',
            '解像度' => '1080×1080',
            'マウスパッド' => 'G640',
            'キーボード' => 'Realforce',
            'ヘッドセット' => 'IEpro40',
        ];
        $apexprolistdetail = new Apexprolist;
        $apexprolistdetail->fill($param)->save();
    }
}
