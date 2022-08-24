<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => "Pecus subseco et uxor conventus arguo provident attollo inflammatio tepidus ara est voluptates advoco recusandae tricesimus attonbitus soluta",
            'detail' => "At tibi animadverto. Delinquo callide vix. Arbustum aspernatur acidus. Spiculum audax delinquo. Infit sol tepidus. Speciosus aliquid curso. Benevolentia ancilla texo. Est incidunt pel. Alioqui caries aperio. Nam statim absconditus. Defungo reprehenderit callide. Socius somnus ago. Talus aut bibo. Articulus ratione et. Sono careo absens. Iste corona dolores. Tristis culpo eligendi. Sodalitas textus aspernatur. Clamo ut ascisco. Valeo defaeco illum. Traho umquam uter. Beatae toties averto",
        ]);
    }
}
