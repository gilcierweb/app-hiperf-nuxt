<?php

declare(strict_types=1);

use Hyperf\Database\Seeders\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Instanciar e executar cada seeder
        $userSeeder = new UserSeeder();
        $userSeeder->run();
        
        // Adicionar outros seeders conforme necessário
        // $productSeeder = new ProductSeeder();
        // $productSeeder->run();
    }
}