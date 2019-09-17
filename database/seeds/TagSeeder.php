<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'sport',
            'alpine',
            'multipitch',
            'trad',
            'ice',
            'boulder',
            'mixed',
            'aid',
            'drytool'
        ];

        foreach ($types as $type){
            DB::table('tags')->insert([
                'k' => \App\Models\Topo\TagKey::TYPE,
                'v' => $type
            ]);
        }

        $lengths = [5,10,20,30,60,100,300,500,100];

        foreach ($lengths as $length){
            DB::table('tags')->insert([
                'k' => \App\Models\Topo\TagKey::LENGTH,
                'v' => $length
            ]);
        }

        DB::table('tags')->insert([
            'k' => \App\Models\Topo\TagKey::LOOSE,
            'v' => 'true'
        ]);

        DB::table('tags')->insert([
            'k' => \App\Models\Topo\TagKey::TOP_PICK,
            'v' => 'true'
        ]);
    }
}
