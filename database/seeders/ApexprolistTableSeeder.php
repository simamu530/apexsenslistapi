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
            'team' => 'team1',
            'name' => 'name1',
            'dpi' => 800,
            'mousesens' => 1.60,
            'multisens' => 1.60,
            'hz' => 1000,
            'fov' => 104,
            'mouse'=> 'Gpro',
            'monitor' => 'Qnix',
            'gpu' => '1080',
            'resolution' => '1080×1080',
            'mousepad' => 'G640',
            'keyboard' => 'Realforce',
            'headset' => 'IEpro40',
        ];
        $apexprolistdetail = new Apexprolist;
        $apexprolistdetail ->fill($param)->save();
        $param = [
            'team' => 'team2',
            'name' => 'name2',
            'dpi' => 800,
            'mousesens' => 1.60,
            'multisens' => 1.60,
            'hz' => 1000,
            'fov' => 104,
            'mouse' => 'Gpro',
            'monitor' => 'Qnix',
            'gpu' => '1080',
            'resolution' => '1080×1080',
            'mousepad' => 'G640',
            'keyboard' => 'Realforce',
            'headset' => 'IEpro40',
        ];
        $apexprolistdetail = new Apexprolist;
        $apexprolistdetail->fill($param)->save();
        $param = [
            'team' => 'team3',
            'name' => 'name3',
            'dpi' => 800,
            'mousesens' => 1.60,
            'multisens' => 1.60,
            'hz' => 1000,
            'fov' => 104,
            'mouse' => 'Gpro',
            'monitor' => 'Qnix',
            'gpu' => '1080',
            'resolution' => '1080×1080',
            'mousepad' => 'G640',
            'keyboard' => 'Realforce',
            'headset' => 'IEpro40',
        ];
        $apexprolistdetail = new Apexprolist;
        $apexprolistdetail->fill($param)->save();
    }
}
