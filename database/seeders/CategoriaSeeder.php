<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::insert([
            [
                'nombre' => 'Electrónica',
                'descripcion' => 'Dispositivos tecnológicos y gadgets.',
            ],
            [
                'nombre' => 'Hogar',
                'descripcion' => 'Productos para el hogar y decoración.',
            ],
            [
                'nombre' => 'Ropa',
                'descripcion' => 'Prendas de vestir y accesorios.',
            ],
        ]);
    }
}
