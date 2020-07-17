<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nome_site')->nullable();
            $table->string('descricao_site')->nullable();
            $table->string('whatsapp_site')->nullable();
            $table->string('facebook_site')->nullable();
            $table->string('twitter_site')->nullable();

            $table->string('mobile_banner')->nullable();
            $table->string('tablet_banner')->nullable();
            $table->string('desktop_banner')->nullable();

            $table->string('title_form')->nullable();
            $table->string('subtitulo_form')->nullable();
            $table->string('subtitulo2_form')->nullable();

            $table->string('title_content')->nullable();
            $table->text('text_content')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_data');
    }
}
