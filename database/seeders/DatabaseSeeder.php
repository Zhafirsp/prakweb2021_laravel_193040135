<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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


        User::create([
            'name' => 'Zhafir SP',
            'username' => 'zhafirsp',
            'email' => 'zhafirsp@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Vanessa',
        //     'email' => 'vanessa@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        User::factory(3)->create();

        Category::create([
            'name' => 'Horror',
            'slug' => 'horror'
        ]);

        Category::create([
            'name' => 'Superhero',
            'slug' => 'superhero'
        ]);

        Category::create([
            'name' => 'Sport',
            'slug' => 'Sport'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Rembulan Dibawah Bintang',
        //     'slug' => 'rembulan-dibawah-bintang',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur dispicable',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum voluptatibus magnam quos asperiores eligendi hic, cum neque, est minus rerum placeat tempore explicabo voluptatem facilis accusantium voluptate eius ipsa, sit suscipit doloremque consequuntur modi quae. Incidunt ipsa similique velit! Ut recusandae fuga nisi, totam labore maxime aspernatur impedit maiores accusamus voluptates sit ad quidem nam numquam aliquam quas commodi officia at? Quaerat impedit cumque cupiditate illo cum id rem assumenda incidunt, nostrum sit ex aliquid fugit hic perferendis. Quasi assumenda quos quaerat nostrum cupiditate? Laborum sed similique odit eius maxime quam, vel nostrum corrupti obcaecati doloremque deleniti pariatur repellat minus recusandae debitis. Ducimus aperiam assumenda aspernatur est velit vel expedita voluptates fugit nesciunt debitis alias id pariatur tenetur distinctio ullam, tempore perspiciatis quis amet possimus nulla enim in laboriosam. Id nisi voluptatum commodi, nemo eaque deleniti. Magnam facere quas quia excepturi suscipit et nobis. Quia, aliquam nobis cumque nulla consectetur cum animi asperiores nesciunt excepturi dignissimos? Asperiores cupiditate quae quia incidunt fugit eligendi sed sunt exercitationem, autem, sapiente officiis soluta. Nesciunt, tempore autem, esse a, quas ullam rerum qui debitis optio corrupti accusantium. Ducimus dolores quaerat, molestias accusantium unde obcaecati neque facere illo sed facilis optio necessitatibus nihil. A officia non cum error beatae dolores explicabo et, aliquid accusamus dolor consequatur nemo nesciunt eius inventore labore illum quod harum cupiditate placeat itaque illo, laborum magni. Nesciunt tempora temporibus minus illo hic nobis architecto in sunt quod mollitia id error veniam eos consequuntur provident asperiores incidunt excepturi, quae necessitatibus. Neque cum maxime voluptatem deleniti. Pariatur voluptatum optio nemo perferendis perspiciatis veritatis, aliquid minima nesciunt consequatur a inventore mollitia sit dolorem dolores porro exercitationem eveniet quis. Pariatur consectetur perspiciatis quo, ipsa voluptatum explicabo maiores doloribus numquam vero delectus neque alias aliquid error, assumenda totam modi corporis nam omnis ratione, qui nulla labore a rem? Delectus eaque iusto omnis similique dolores quasi non doloribus pariatur maxime natus aliquid quos optio dolorum nostrum laudantium, officiis, nulla consequuntur soluta veritatis quo excepturi, architecto minus dolor aspernatur. Minus, cupiditate molestias reiciendis quidem voluptatem incidunt animi. Minus possimus numquam perferendis enim quae voluptatibus, dolorem ex. Optio odio repellat atque recusandae labore, nemo id reprehenderit earum in, distinctio iste necessitatibus veniam illo quisquam ratione dicta itaque totam deserunt cumque. Culpa exercitationem quas dolore tempora iure fuga possimus voluptatibus ab quaerat ipsa sint blanditiis ex dolorum quis officiis mollitia nulla provident, ullam repellat esse sequi. Deleniti ea praesentium soluta, laborum numquam sapiente obcaecati et! Numquam nulla repellat a mollitia fugit. Sed exercitationem nemo facere, dolore reiciendis iste enim tenetur perferendis molestiae placeat dolorem, qui laboriosam culpa molestias error doloremque architecto ea. Debitis suscipit unde eligendi libero, neque quasi fugiat nesciunt vel dolor architecto quis aliquid ducimus a delectus ut adipisci doloribus at omnis atque tempore! Et voluptatibus adipisci, placeat quasi corporis accusamus nihil animi quia est quam quae recusandae! Voluptatibus cum, perferendis quibusdam eum nostrum ad id eaque laboriosam ab inventore! Necessitatibus enim eum asperiores esse quam, repudiandae dolore minima ea reiciendis sunt, ab praesentium quod tempora possimus dicta!'

        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Berdua Tanpa Sadar',
        //     'slug' => 'berdua-tanpa-sadar',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur dispicable',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum voluptatibus magnam quos asperiores eligendi hic, cum neque, est minus rerum placeat tempore explicabo voluptatem facilis accusantium voluptate eius ipsa, sit suscipit doloremque consequuntur modi quae. Incidunt ipsa similique velit! Ut recusandae fuga nisi, totam labore maxime aspernatur impedit maiores accusamus voluptates sit ad quidem nam numquam aliquam quas commodi officia at? Quaerat impedit cumque cupiditate illo cum id rem assumenda incidunt, nostrum sit ex aliquid fugit hic perferendis. Quasi assumenda quos quaerat nostrum cupiditate? Laborum sed similique odit eius maxime quam, vel nostrum corrupti obcaecati doloremque deleniti pariatur repellat minus recusandae debitis. Ducimus aperiam assumenda aspernatur est velit vel expedita voluptates fugit nesciunt debitis alias id pariatur tenetur distinctio ullam, tempore perspiciatis quis amet possimus nulla enim in laboriosam. Id nisi voluptatum commodi, nemo eaque deleniti. Magnam facere quas quia excepturi suscipit et nobis. Quia, aliquam nobis cumque nulla consectetur cum animi asperiores nesciunt excepturi dignissimos? Asperiores cupiditate quae quia incidunt fugit eligendi sed sunt exercitationem, autem, sapiente officiis soluta. Nesciunt, tempore autem, esse a, quas ullam rerum qui debitis optio corrupti accusantium. Ducimus dolores quaerat, molestias accusantium unde obcaecati neque facere illo sed facilis optio necessitatibus nihil. A officia non cum error beatae dolores explicabo et, aliquid accusamus dolor consequatur nemo nesciunt eius inventore labore illum quod harum cupiditate placeat itaque illo, laborum magni. Nesciunt tempora temporibus minus illo hic nobis architecto in sunt quod mollitia id error veniam eos consequuntur provident asperiores incidunt excepturi, quae necessitatibus. Neque cum maxime voluptatem deleniti. Pariatur voluptatum optio nemo perferendis perspiciatis veritatis, aliquid minima nesciunt consequatur a inventore mollitia sit dolorem dolores porro exercitationem eveniet quis. Pariatur consectetur perspiciatis quo, ipsa voluptatum explicabo maiores doloribus numquam vero delectus neque alias aliquid error, assumenda totam modi corporis nam omnis ratione, qui nulla labore a rem? Delectus eaque iusto omnis similique dolores quasi non doloribus pariatur maxime natus aliquid quos optio dolorum nostrum laudantium, officiis, nulla consequuntur soluta veritatis quo excepturi, architecto minus dolor aspernatur. Minus, cupiditate molestias reiciendis quidem voluptatem incidunt animi. Minus possimus numquam perferendis enim quae voluptatibus, dolorem ex. Optio odio repellat atque recusandae labore, nemo id reprehenderit earum in, distinctio iste necessitatibus veniam illo quisquam ratione dicta itaque totam deserunt cumque. Culpa exercitationem quas dolore tempora iure fuga possimus voluptatibus ab quaerat ipsa sint blanditiis ex dolorum quis officiis mollitia nulla provident, ullam repellat esse sequi. Deleniti ea praesentium soluta, laborum numquam sapiente obcaecati et! Numquam nulla repellat a mollitia fugit. Sed exercitationem nemo facere, dolore reiciendis iste enim tenetur perferendis molestiae placeat dolorem, qui laboriosam culpa molestias error doloremque architecto ea. Debitis suscipit unde eligendi libero, neque quasi fugiat nesciunt vel dolor architecto quis aliquid ducimus a delectus ut adipisci doloribus at omnis atque tempore! Et voluptatibus adipisci, placeat quasi corporis accusamus nihil animi quia est quam quae recusandae! Voluptatibus cum, perferendis quibusdam eum nostrum ad id eaque laboriosam ab inventore! Necessitatibus enim eum asperiores esse quam, repudiandae dolore minima ea reiciendis sunt, ab praesentium quod tempora possimus dicta!'
        // ]);

        // Post::create([
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'title' => 'Tanpa Kata',
        //     'slug' => 'tanpa-kata',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur dispicable',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum voluptatibus magnam quos asperiores eligendi hic, cum neque, est minus rerum placeat tempore explicabo voluptatem facilis accusantium voluptate eius ipsa, sit suscipit doloremque consequuntur modi quae. Incidunt ipsa similique velit! Ut recusandae fuga nisi, totam labore maxime aspernatur impedit maiores accusamus voluptates sit ad quidem nam numquam aliquam quas commodi officia at? Quaerat impedit cumque cupiditate illo cum id rem assumenda incidunt, nostrum sit ex aliquid fugit hic perferendis. Quasi assumenda quos quaerat nostrum cupiditate? Laborum sed similique odit eius maxime quam, vel nostrum corrupti obcaecati doloremque deleniti pariatur repellat minus recusandae debitis. Ducimus aperiam assumenda aspernatur est velit vel expedita voluptates fugit nesciunt debitis alias id pariatur tenetur distinctio ullam, tempore perspiciatis quis amet possimus nulla enim in laboriosam. Id nisi voluptatum commodi, nemo eaque deleniti. Magnam facere quas quia excepturi suscipit et nobis. Quia, aliquam nobis cumque nulla consectetur cum animi asperiores nesciunt excepturi dignissimos? Asperiores cupiditate quae quia incidunt fugit eligendi sed sunt exercitationem, autem, sapiente officiis soluta. Nesciunt, tempore autem, esse a, quas ullam rerum qui debitis optio corrupti accusantium. Ducimus dolores quaerat, molestias accusantium unde obcaecati neque facere illo sed facilis optio necessitatibus nihil. A officia non cum error beatae dolores explicabo et, aliquid accusamus dolor consequatur nemo nesciunt eius inventore labore illum quod harum cupiditate placeat itaque illo, laborum magni. Nesciunt tempora temporibus minus illo hic nobis architecto in sunt quod mollitia id error veniam eos consequuntur provident asperiores incidunt excepturi, quae necessitatibus. Neque cum maxime voluptatem deleniti. Pariatur voluptatum optio nemo perferendis perspiciatis veritatis, aliquid minima nesciunt consequatur a inventore mollitia sit dolorem dolores porro exercitationem eveniet quis. Pariatur consectetur perspiciatis quo, ipsa voluptatum explicabo maiores doloribus numquam vero delectus neque alias aliquid error, assumenda totam modi corporis nam omnis ratione, qui nulla labore a rem? Delectus eaque iusto omnis similique dolores quasi non doloribus pariatur maxime natus aliquid quos optio dolorum nostrum laudantium, officiis, nulla consequuntur soluta veritatis quo excepturi, architecto minus dolor aspernatur. Minus, cupiditate molestias reiciendis quidem voluptatem incidunt animi. Minus possimus numquam perferendis enim quae voluptatibus, dolorem ex. Optio odio repellat atque recusandae labore, nemo id reprehenderit earum in, distinctio iste necessitatibus veniam illo quisquam ratione dicta itaque totam deserunt cumque. Culpa exercitationem quas dolore tempora iure fuga possimus voluptatibus ab quaerat ipsa sint blanditiis ex dolorum quis officiis mollitia nulla provident, ullam repellat esse sequi. Deleniti ea praesentium soluta, laborum numquam sapiente obcaecati et! Numquam nulla repellat a mollitia fugit. Sed exercitationem nemo facere, dolore reiciendis iste enim tenetur perferendis molestiae placeat dolorem, qui laboriosam culpa molestias error doloremque architecto ea. Debitis suscipit unde eligendi libero, neque quasi fugiat nesciunt vel dolor architecto quis aliquid ducimus a delectus ut adipisci doloribus at omnis atque tempore! Et voluptatibus adipisci, placeat quasi corporis accusamus nihil animi quia est quam quae recusandae! Voluptatibus cum, perferendis quibusdam eum nostrum ad id eaque laboriosam ab inventore! Necessitatibus enim eum asperiores esse quam, repudiandae dolore minima ea reiciendis sunt, ab praesentium quod tempora possimus dicta!'
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Violet Tak Berwarna',
        //     'slug' => 'violet-tak-berwarna',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur dispicable',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum voluptatibus magnam quos asperiores eligendi hic, cum neque, est minus rerum placeat tempore explicabo voluptatem facilis accusantium voluptate eius ipsa, sit suscipit doloremque consequuntur modi quae. Incidunt ipsa similique velit! Ut recusandae fuga nisi, totam labore maxime aspernatur impedit maiores accusamus voluptates sit ad quidem nam numquam aliquam quas commodi officia at? Quaerat impedit cumque cupiditate illo cum id rem assumenda incidunt, nostrum sit ex aliquid fugit hic perferendis. Quasi assumenda quos quaerat nostrum cupiditate? Laborum sed similique odit eius maxime quam, vel nostrum corrupti obcaecati doloremque deleniti pariatur repellat minus recusandae debitis. Ducimus aperiam assumenda aspernatur est velit vel expedita voluptates fugit nesciunt debitis alias id pariatur tenetur distinctio ullam, tempore perspiciatis quis amet possimus nulla enim in laboriosam. Id nisi voluptatum commodi, nemo eaque deleniti. Magnam facere quas quia excepturi suscipit et nobis. Quia, aliquam nobis cumque nulla consectetur cum animi asperiores nesciunt excepturi dignissimos? Asperiores cupiditate quae quia incidunt fugit eligendi sed sunt exercitationem, autem, sapiente officiis soluta. Nesciunt, tempore autem, esse a, quas ullam rerum qui debitis optio corrupti accusantium. Ducimus dolores quaerat, molestias accusantium unde obcaecati neque facere illo sed facilis optio necessitatibus nihil. A officia non cum error beatae dolores explicabo et, aliquid accusamus dolor consequatur nemo nesciunt eius inventore labore illum quod harum cupiditate placeat itaque illo, laborum magni. Nesciunt tempora temporibus minus illo hic nobis architecto in sunt quod mollitia id error veniam eos consequuntur provident asperiores incidunt excepturi, quae necessitatibus. Neque cum maxime voluptatem deleniti. Pariatur voluptatum optio nemo perferendis perspiciatis veritatis, aliquid minima nesciunt consequatur a inventore mollitia sit dolorem dolores porro exercitationem eveniet quis. Pariatur consectetur perspiciatis quo, ipsa voluptatum explicabo maiores doloribus numquam vero delectus neque alias aliquid error, assumenda totam modi corporis nam omnis ratione, qui nulla labore a rem? Delectus eaque iusto omnis similique dolores quasi non doloribus pariatur maxime natus aliquid quos optio dolorum nostrum laudantium, officiis, nulla consequuntur soluta veritatis quo excepturi, architecto minus dolor aspernatur. Minus, cupiditate molestias reiciendis quidem voluptatem incidunt animi. Minus possimus numquam perferendis enim quae voluptatibus, dolorem ex. Optio odio repellat atque recusandae labore, nemo id reprehenderit earum in, distinctio iste necessitatibus veniam illo quisquam ratione dicta itaque totam deserunt cumque. Culpa exercitationem quas dolore tempora iure fuga possimus voluptatibus ab quaerat ipsa sint blanditiis ex dolorum quis officiis mollitia nulla provident, ullam repellat esse sequi. Deleniti ea praesentium soluta, laborum numquam sapiente obcaecati et! Numquam nulla repellat a mollitia fugit. Sed exercitationem nemo facere, dolore reiciendis iste enim tenetur perferendis molestiae placeat dolorem, qui laboriosam culpa molestias error doloremque architecto ea. Debitis suscipit unde eligendi libero, neque quasi fugiat nesciunt vel dolor architecto quis aliquid ducimus a delectus ut adipisci doloribus at omnis atque tempore! Et voluptatibus adipisci, placeat quasi corporis accusamus nihil animi quia est quam quae recusandae! Voluptatibus cum, perferendis quibusdam eum nostrum ad id eaque laboriosam ab inventore! Necessitatibus enim eum asperiores esse quam, repudiandae dolore minima ea reiciendis sunt, ab praesentium quod tempora possimus dicta!'
        // ]);
    }
}
