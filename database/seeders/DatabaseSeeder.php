<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Level;
use App\Models\Position;
use App\Models\Product;
use App\Models\Salary;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(50)->create();

        // User
        User::create([
            'name' => 'Fariz Ammar',
            'username' => 'Fariz22',
            'email' => 'f.ammarsyq11@gmail.com',
            'password' => bcrypt('farnisa27'),
            'address' => 'Jl. Pembangunan 2 No.10 RT.04/06, Kedung Halang Talang. Kota Bogor',
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Ainun Najib',
            'username' => 'Najib02',
            'email' => 'ainunnajib338@gmail.com',
            'password' => bcrypt('123456'),
            'address' => fake()->address(),
            'remember_token' => Str::random(10)
        ]);

        // Product
        Product::create([
            'name' => 'Baju Batik',
            'short-name' => 'baju-batik',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis animi iste dignissimos corrupti qui quam minus dicta voluptatum adipisci ratione!',
            'price' => '50000',
            'stock' => 5
        ]);
        Product::create([
            'name' => 'Baju Koko Anak',
            'short-name' => 'baju-koko-anak',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id inventore modi nam sint labore. Facilis quasi perferendis hic, at est commodi a consequatur dolores. Quam consequatur dicta aliquid illum eaque.',
            'price' => '200000',
            'stock' => 8
        ]);
        Product::create([
            'name' => 'Celana Jeans Pria Vans',
            'short-name' => 'celana-jeans-pria-vans',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus tempora soluta, perferendis ullam cumque placeat nihil, quisquam inventore provident dignissimos expedita numquam, voluptatem sapiente qui illum! Voluptatem tenetur, excepturi fuga facilis esse doloremque aspernatur ipsa obcaecati ratione repellendus voluptatibus ad nulla autem labore aperiam quae in sed dignissimos, ab odio.',
            'price' => '300000',
            'stock' => 10
        ]);
    }
}
