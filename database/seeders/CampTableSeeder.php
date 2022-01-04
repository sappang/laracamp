<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps =[
            [
                'title' => 'Smile',
                'slug'  => 'b-smile',
                'price' =>280,
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                
            ],
            [
                'title' => 'Happy',
                'slug'  => 'b-happy',
                'price' =>140,
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                
            ],
            ];
            //1st method 
            foreach ($camps as $key => $camp) {
                Camp::create($camp);
            }
            //2nd Method
            //  Camp::insert($camps);
    }
}
