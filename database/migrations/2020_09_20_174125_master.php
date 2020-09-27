<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Master extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create(
            'destinasis',
            function (Blueprint $table) {
                $table->id();
                $table->text('nama');
                $table->timestamps();

            }
        );

        Schema::create(
            'penginapans',
            function (Blueprint $table) {
                $table->id();
                $table->text('nama');
                $table->enum('tipe', ['Hotel', 'Vila'])->default('Hotel');
                $table->bigInteger('harga')->default('0');
                $table->bigInteger('id_destinasi')->unsigned();
                $table->longText('deskripsi')->nullable(true);
                $table->foreign('id_destinasi')->references('id')->on('destinasis');
                $table->timestamps();

            }
        );

        Schema::create(
            'tours',
            function (Blueprint $table) {
                $table->id();
                $table->text('nama');
                $table->bigInteger('harga')->default('0');
                $table->longText('deskripsi')->nullable(true);
                $table->bigInteger('id_destinasi')->unsigned();
                $table->foreign('id_destinasi')->references('id')->on('destinasis');
                $table->timestamps();

            }
        );

        Schema::create(
            'pakets',
            function (Blueprint $table) {
                $table->id();
                $table->text('nama');
                $table->bigInteger('harga')->default('0');
                $table->string('durasi');
                $table->longText('deskripsi')->nullable(true);
                $table->bigInteger('id_tour')->unsigned();
                $table->foreign('id_tour')->references('id')->on('tours');
                $table->bigInteger('id_penginapan')->nullable(true)->unsigned();
                $table->foreign('id_penginapan')->references('id')->on('penginapans');
                $table->timestamps();

            }
        );

        Schema::create(
            'articles',
            function (Blueprint $table) {
                $table->id();
                $table->text('judul');
                $table->longText('konten')->nullable(true);
                $table->timestamps();

            }
        );

        Schema::create(
            'transactions',
            function (Blueprint $table) {
                $table->id();
                $table->text('pemesan');
                $table->string('phone','15');
                $table->longText('deskripsi')->nullable(true);
                $table->bigInteger('id_paket')->unsigned();
                $table->foreign('id_paket')->references('id')->on('pakets');
                $table->timestamps();
            }
        );


        Schema::create('gallerys', function (Blueprint $table) {
            $table->id();
            $table->text('judul');
            $table->timestamps();

        });

        Schema::create('images', function (Blueprint $table) {
           $table->id();
           $table->bigInteger('id_galery')->nullable(true)->unsigned();
           $table->enum('tipe', ['penginapan', 'tour', 'paket', 'article'])->default('penginapan');
           $table->longText('url');
           $table->foreign('id_galery')->references('id')->on('gallerys');
            $table->timestamps();

        });

        Schema::create('penginapan_to_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_penginapan')->unsigned();
            $table->bigInteger('id_image')->unsigned();
            $table->longText('url')->nullable(true);
            $table->foreign('id_penginapan')->references('id')->on('penginapans');
            $table->foreign('id_image')->references('id')->on('images');
            $table->timestamps();

        });

        Schema::create('tour_to_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_tour')->unsigned();
            $table->bigInteger('id_image')->unsigned();
            $table->longText('url')->nullable(true);
            $table->foreign('id_tour')->references('id')->on('tours');
            $table->foreign('id_image')->references('id')->on('images');
            $table->timestamps();

        });

        Schema::create('paket_to_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_paket')->unsigned();
            $table->bigInteger('id_image')->unsigned();
            $table->longText('url')->nullable(true);
            $table->foreign('id_paket')->references('id')->on('pakets');
            $table->foreign('id_image')->references('id')->on('images');
            $table->timestamps();

        });

        Schema::create('article_to_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_article')->unsigned();
            $table->bigInteger('id_image')->unsigned();
            $table->longText('url')->nullable(true);
            $table->foreign('id_article')->references('id')->on('articles');
            $table->foreign('id_image')->references('id')->on('images');
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
        //
        Schema::dropIfExists('destinasis');
        Schema::dropIfExists('peninapans');
        Schema::dropIfExists('tours');
        Schema::dropIfExists('pakets');
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('acticles');
        Schema::dropIfExists('gallerys');
        Schema::dropIfExists('images');
        Schema::dropIfExists('penginapan_to_images');
        Schema::dropIfExists('tour_to_images');
        Schema::dropIfExists('paket_to_images');
        Schema::dropIfExists('acticle_to_images');

    }
}
