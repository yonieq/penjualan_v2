<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kecamatans = array(
            [
                'name' => 'Adiwerna',
            ],
            [
                'name' => 'Balapulang',
            ],
            [
                'name' => 'Bojong',
            ],
            [
                'name' => 'Bumijawa',
            ],
            [
                'name' => 'Dukuhturi',
            ],
            [
                'name' => 'Dukuhwaru',
            ],
            [
                'name' => 'Jatinegara',
            ],
            [
                'name' => 'Kedungbanteng',
            ],
            [
                'name' => 'Kramat',
            ],
            [
                'name' => 'Lebaksiu',
            ],
            [
                'name' => 'Margasari',
            ],
            [
                'name' => 'Pagerbarang',
            ],
            [
                'name' => 'Pangkah',
            ],
            [
                'name' => 'Slawi',
            ],
            [
                'name' => 'Suradadi',
            ],
            [
                'name' => 'Talang',
            ],
            [
                'name' => 'Tarub',
            ],
            [
                'name' => 'Warureja',
            ]
        );

        array_map(function (array $kecamatan) {
            Kecamatan::query()->updateOrCreate(
                ['name' => $kecamatan['name']],
                $kecamatan
            );
        }, $kecamatans);
    }
}
