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
            'team' => 'smm1',
            'name' => 'simamu1',
            'dpi' => 800,
            'mousesens' => 1.6,
            'multisens' => 1.6,
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
            'team' => 'smm2',
            'name' => 'simamu2',
            'dpi' => 800,
            'mousesens' => 1.6,
            'multisens' => 1.6,
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
            'team' => 'smm3',
            'name' => 'simamu3',
            'dpi' => 800,
            'mousesens' => 1.6,
            'multisens' => 1.6,
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
