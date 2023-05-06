<?php

namespace Database\Seeders;

use App\Models\Transporte;
use Illuminate\Database\Seeder;

class TransporteSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        $proveedor = new Proveedor();
        $proveedor->codigo_proveedor='1234ABCD';
        $proveedor->nombre_proveedor='Proveedor 3';
        $proveedor->direccion='pto Barrios';
        $proveedor->telefono='73434243';
        $proveedor->save();

    }
}
