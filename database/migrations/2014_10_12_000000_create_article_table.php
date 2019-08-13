<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('essences', function($article) {
        $article->increments('id');
        $article->varchar('nom', 255);
        $article->varchar('prenom', 255);
        $article->varchar('email', 255);
        $article->varchar('tel', 225);
        $article->varchar('localite', 255);
        $article->varchar('appelation', 255);
        $article->int('prix');
        $article->varchar('superficie', 255);
        $article->int('chambre');
        $article->int('salon');
        $article->int('garage');
        $article->int('douche');
        $article->varchar('echelle', 255);
        $article->varchar('type_offre', 255);
        $article->varchar('image', 255);
        $article->varchar('info', 10000);
    });

    }

    /**
     * Reverse the migrations.
     *
     *
     */
}
