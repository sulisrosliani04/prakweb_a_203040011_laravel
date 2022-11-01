<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Sulis Rosliani',
        //     'email' => 'sulisrosliani2@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Depi',
        //     'email' => 'depii@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt atque odit fugit et odio delectus fugiat consequatur voluptas in excepturi placeat, omnis doloribus! Esse eum nesciunt odio quisquam officia, pariatur rerum totam tempora, nostrum voluptatem tempore. Repudiandae quidem officiis facilis, neque blanditiis similique eius earum voluptatum modi quibusdam sequi! Asperiores, amet. Voluptas officia quae magni totam quia reprehenderit deleniti temporibus ipsam omnis earum ratione, repudiandae fugiat alias corporis necessitatibus tempore pariatur nemo! Totam dolores autem incidunt nam cum. Blanditiis pariatur, asperiores esse ullam corrupti doloremque totam ad, fugiat enim molestiae laborum, saepe autem excepturi quibusdam! Nam similique veniam culpa corporis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt atque odit fugit et odio delectus fugiat consequatur voluptas in excepturi placeat, omnis doloribus! Esse eum nesciunt odio quisquam officia, pariatur rerum totam tempora, nostrum voluptatem tempore. Repudiandae quidem officiis facilis, neque blanditiis similique eius earum voluptatum modi quibusdam sequi! Asperiores, amet. Voluptas officia quae magni totam quia reprehenderit deleniti temporibus ipsam omnis earum ratione, repudiandae fugiat alias corporis necessitatibus tempore pariatur nemo! Totam dolores autem incidunt nam cum. Blanditiis pariatur, asperiores esse ullam corrupti doloremque totam ad, fugiat enim molestiae laborum, saepe autem excepturi quibusdam! Nam similique veniam culpa corporis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt atque odit fugit et odio delectus fugiat consequatur voluptas in excepturi placeat, omnis doloribus! Esse eum nesciunt odio quisquam officia, pariatur rerum totam tempora, nostrum voluptatem tempore. Repudiandae quidem officiis facilis, neque blanditiis similique eius earum voluptatum modi quibusdam sequi! Asperiores, amet. Voluptas officia quae magni totam quia reprehenderit deleniti temporibus ipsam omnis earum ratione, repudiandae fugiat alias corporis necessitatibus tempore pariatur nemo! Totam dolores autem incidunt nam cum. Blanditiis pariatur, asperiores esse ullam corrupti doloremque totam ad, fugiat enim molestiae laborum, saepe autem excepturi quibusdam! Nam similique veniam culpa corporis!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt atque odit fugit et odio delectus fugiat consequatur voluptas in excepturi placeat, omnis doloribus! Esse eum nesciunt odio quisquam officia, pariatur rerum totam tempora, nostrum voluptatem tempore. Repudiandae quidem officiis facilis, neque blanditiis similique eius earum voluptatum modi quibusdam sequi! Asperiores, amet. Voluptas officia quae magni totam quia reprehenderit deleniti temporibus ipsam omnis earum ratione, repudiandae fugiat alias corporis necessitatibus tempore pariatur nemo! Totam dolores autem incidunt nam cum. Blanditiis pariatur, asperiores esse ullam corrupti doloremque totam ad, fugiat enim molestiae laborum, saepe autem excepturi quibusdam! Nam similique veniam culpa corporis!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
