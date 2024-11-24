<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        for($i=1 ; $i <=100;$i++){
            DB::table('tbl_barangs')->insert([
                'KODEBRG'=>fake()->isbn10(),
                'NAMABRG'=>fake()->text(100),
                'SATUAN'=>'unit',
                'HARGABELI'=>fake()->randomNumber(5,true),
            ]);
        }
        for($i=1 ; $i <=100;$i++){
            DB::table('tbl_supliers')->insert([
                'KODESPL'=>fake()->isbn10(),
                'NAMASPL'=>fake()->name(100),
                
            ]);
        }
    }
}