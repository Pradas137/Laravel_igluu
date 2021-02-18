<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostsCommentsLikesUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //POSTS
         Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('text', 500);
            $table->unsignedBigInteger("user_id");
            $table->binary('images');
            $table->timestamps();
        });

        //COMENTARIS
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('text', 300);
            $table->timestamps();
        });

        //LIKES

        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });

        //MODIFICAR TABLA USERSs

        Schema::table('users', function (Blueprint $table) {
            $table->binary('image')->nullable();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('posts');
        Schema::table('users',function(Blueprint $table){ $table->dropColumn('image');
        });

        //TODO: treure image de users ...Schema::dropIfExists('users');
    }
}
