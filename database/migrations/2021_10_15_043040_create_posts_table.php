<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('title');
            $table->string('author');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
Post::create([
    'title' => 'Rembulan Dibawah Bintang',
    'category_id' => 1,
    'author' => 'Mariana',
    'slug' => 'rembulan-dibawah-bintang',
    'excerpt' => 'Lorem, ipsum dolor sit amet',
    'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugit unde doloribus saepe sequi nam, ex nesciunt iure autem amet asperiores minus suscipit quibusdam consectetur aliquam necessitatibus quaerat consequatur corrupti similique assumenda.</p><p>Voluptatibus ea rerum eius nostrum perspiciatis mollitia magni possimus libero? Vitae sint nisi ipsam modi possimus. Consequuntur, neque, modi id nesciunt laboriosam eveniet unde ad dicta distinctio dolore necessitatibus, ratione rem sunt? Voluptates repellendus, accusantium dolorem facilis quos magni minus voluptate expedita veniam dolores omnis odio.</p><p>Sapiente eligendi aperiam excepturi, placeat corporis nam sed maiores optio impedit autem officiis, necessitatibus assumenda accusantium minima libero, recusandae quasi quam veritatis? Ipsam, labore tempora tempore odio ea porro nesciunt sit magni doloribus! Omnis quisquam maxime quo quia ipsam non illum explicabo fugiat velit odio a sequi doloremque accusantium expedita voluptate, eius necessitatibus rem earum voluptatum facere iste quas mollitia cupiditate dolorum. Odio illo laudantium provident dolorum vitae natus, cupiditate dolor soluta facilis repellat voluptatem iste mollitia veritatis quis odit quisquam porro aliquid unde error cumque. Cumque itaque eius ea nulla soluta!</p>'
  ])