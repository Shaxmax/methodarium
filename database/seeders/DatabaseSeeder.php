<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Create Default Users

        \App\Models\User::create([
            'name' => 'Markus Frank-Schagerl',
            'email' => 'markus.schagerl@neverest.at',
            'password' => '1234567890'
        ]);

        \App\Models\User::create([
            'name' => 'Jennifer Frank-Schagerl',
            'email' => 'jennifer.frank@neverest.at',
            'password' => '1234567890'
        ]);

        \App\Models\User::create([
            'name' => 'Sabrina Meidl',
            'email' => 'sabrina.meidl@neverest.at',
            'password' => '1234567890'
        ]);

        // Create Categories

        \App\Models\Category::create([
            'prefix' => 'zum',
            'category' => 'Kennenlernen',
            'font_color' => '#FFFFFF',
            'color_code' => '#FE2712'
        ]);

        \App\Models\Category::create([
            'prefix' => 'zum',
            'category' => 'Einstieg ins Thema',
            'font_color' => '#FFFFFF',
            'color_code' => '#FC6000A'
        ]);

        \App\Models\Category::create([
            'prefix' => 'zur',
            'category' => 'Aktivierung',
            'font_color' => '#000000',
            'color_code' => '#FB9902'
        ]);

        \App\Models\Category::create([
            'prefix' => 'zur',
            'category' => 'Gruppeneinteilung',
            'font_color' => '#000000',
            'color_code' => 'FCCC1A'
        ]);

        \App\Models\Category::create([
            'prefix' => 'zur',
            'category' => 'Erarbeitung von Inhalt',
            'font_color' => '#000000',
            'color_code' => '#FEFE33'
        ]);

        \App\Models\Category::create([
            'prefix' => 'zur',
            'category' => 'Förderung von Kreativität',
            'font_color' => '#000000',
            'color_code' => '#B2D732'
        ]);

        \App\Models\Category::create([
            'prefix' => 'zur',
            'category' => 'Wiederholung',
            'font_color' => '#FFFFFF',
            'color_code' => '#66B032'
        ]);

        \App\Models\Category::create([
            'prefix' => 'zur',
            'category' => 'Gruppendynamik',
            'font_color' => '#FFFFFF',
            'color_code' => '#347C98'
        ]);

        \App\Models\Category::create([
            'prefix' => 'für',
            'category' => 'Feedback',
            'font_color' => '#FFFFFF',
            'color_code' => '#0247FE'
        ]);

        \App\Models\Category::create([
            'prefix' => 'zum',
            'category' => 'Transfer',
            'font_color' => '#FFFFFF',
            'color_code' => '#4424DE'
        ]);

        \App\Models\Category::create([
            'prefix' => 'für',
            'category' => 'Großgruppen',
            'font_color' => '#FFFFFF',
            'color_code' => '#8601AF'
        ]);

        \App\Models\Category::create([
            'prefix' => 'für',
            'category' => 'Innovation',
            'font_color' => '#FFFFFF',
            'color_code' => '#C21460'
        ]);

        \App\Models\Category::create([
            'prefix' => 'zur',
            'category' => 'Gamification',
            'font_color' => '#FFFFFF',
            'color_code' => '#6b9b1f'
        ]);

        // Create Methoden

        \App\Models\Method::create([
            'title' => '3 Hashtags',
            'category_id' => '1',
            'goal' => 'Die Teilnehmenden stellen sich vor',
            'stage' => 'WARUM',
            'complexity' => '1',
            'duration' => '15 - 20 Min.',
            'participants' => 'unbegrenzt',
            'social_form' => 'Einzelarbeit',
            'learning_environment' => 'Online',
            'explanation' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'example' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et',
            'obstacles' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'tips' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'preparation' => 'den eigenen Namen vorbereiten',
            'preparation_level' => '3',
            'material' => 'Flipcharts, Moderationskarten',
            'source' => 'Daniela Reuter - 202 Methoden, die begeistern!',
            'online' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam',
            'author' => '1'
        ]);

        \App\Models\Method::create([
            'title' => 'Brainstorming',
            'category_id' => '6',
            'goal' => 'Die Teilnehmende finden kreative Lösungen',
            'stage' => 'WARUM',
            'complexity' => '1',
            'duration' => '5 - 10 Min.',
            'participants' => 'unbegrenzt',
            'social_form' => 'Einzelarbeit',
            'learning_environment' => 'Online',
            'explanation' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'example' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et',
            'obstacles' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'tips' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'preparation' => 'den eigenen Namen vorbereiten',
            'preparation_level' => '5',
            'material' => 'Flipcharts, Moderationskarten',
            'source' => 'Daniela Reuter - 202 Methoden, die begeistern!',
            'online' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam',
            'author' => '2'
        ]);

        \App\Models\Method::create([
            'title' => 'Körperknobeln',
            'category_id' => '3',
            'goal' => 'Aktivierung der Teilnehmenden',
            'stage' => 'WAS',
            'complexity' => '3',
            'duration' => '10 Min.',
            'participants' => '6 bis 10 Teilnehmende',
            'social_form' => 'Einzelarbeit',
            'learning_environment' => 'Online',
            'explanation' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'example' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et',
            'obstacles' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'tips' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'preparation' => 'den eigenen Namen vorbereiten',
            'preparation_level' => '2',
            'material' => 'Flipcharts, Moderationskarten',
            'source' => 'Daniela Reuter - 202 Methoden, die begeistern!',
            'online' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam',
            'author' => '1'
        ]);



    }
}


/*

            $table->id();
            $table->text('title');
            $table->text('category');
            $table->text('goal');
            $table->text('stage');
            $table->smallinteger('complexity');
            $table->string('duration');
            $table->string('participants');
            $table->string('social_form');
            $table->string('learning_environment');
            $table->text('explanation');
            $table->text('example')->nullable();
            $table->text('obstacles')->nullable();
            $table->text('tips')->nullable();
            $table->smallinteger('preparation_level');
            $table->string('preparation');
            $table->string('material');
            $table->string('source')->nullable();
            $table->text('online')->nullable();
            $table->smallinteger('author');
            $table->timestamps();

*/