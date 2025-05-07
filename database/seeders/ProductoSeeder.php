<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Categoria;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriaElectro = Categoria::where('nombre', 'Electrónica')->first();
        $categoriaHogar = Categoria::where('nombre', 'Hogar')->first();
        $categoriaRopa = Categoria::where('nombre', 'Ropa')->first();

        Producto::insert([
            [
                'nombre' => 'Smartphone',
                'precio' => 499.99,
                'stock' => 20,
                'categoria_id' => $categoriaElectro->id,
            ],
            [
                'nombre' => 'TV 50"',
                'precio' => 799.99,
                'stock' => 10,
                'categoria_id' => $categoriaElectro->id,
            ],
            [
                'nombre' => 'Sofá',
                'precio' => 299.99,
                'stock' => 5,
                'categoria_id' => $categoriaHogar->id,
            ],
            [
                'nombre' => 'Camisa',
                'precio' => 29.99,
                'stock' => 50,
                'categoria_id' => $categoriaRopa->id,
            ],
        ]);
    }
}
