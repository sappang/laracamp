<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;
class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits =[
            [
                'camp_id' => 1,
                'name' => 'Good Smile'
            ],
            [
                'camp_id' => 1,
                'name' => 'Good think'
            ],
            [
                'camp_id' => 1,
                'name' => 'Crazy Strategic'
            ],
            [
                'camp_id' => 1,
                'name' => 'certificate '
            ],
            [
                'camp_id' => 1,
                'name' => 'Hard Work'
            ],
            [
                'camp_id' => 1,
                'name' => 'Surga'
            ],
            [
                'camp_id' => 1,
                'name' => 'Freedom focus'
            ],
            [
                'camp_id' => 2,
                'name' => 'Happy Think '
            ],
            [
                'camp_id' => 2,
                'name' => 'Hard Work'
            ],
            [
                'camp_id' => 2,
                'name' => 'Surga'
            ],
            ];
        CampBenefit::insert($campBenefits);

    }
}
