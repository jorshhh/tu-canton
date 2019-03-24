<?php

use Illuminate\Database\Seeder;

use App\Http\Models\User;
use App\Http\Models\Team;
use App\Http\Models\Client;

class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $team1 = new Team;
        $team1->name = "Equipo 1";
        $team1->save();

        $team2 = new Team;
        $team2->name = "Equipo 2";
        $team2->save();

        $user1 = new User;
        $user1->name = "Usuario 1";
        $user1->team_id = $team1->id;
        $user1->save();

        $user2 = new User;
        $user2->name = "Usuario 2";
        $user2->team_id = $team1->id;
        $user2->save();

        $user3 = new User;
        $user3->name = "Usuario 3";
        $user3->team_id = $team2->id;
        $user3->save();

        $client1 = new Client;
        $client1->email = "email1@test.com";
        $client1->user_id = $user1->id;
        $client1->save();


        $client2 = new Client;
        $client2->email = "email2@test.com";
        $client2->user_id = $user1->id;
        $client2->save();


        $client3 = new Client;
        $client3->email = "email3@test.com";
        $client3->user_id = $user2->id;
        $client3->save();


        $client4 = new Client;
        $client4->email = "email4@test.com";
        $client4->user_id = $user3->id;
        $client4->save();


        $client5 = new Client;
        $client5->email = "email5@test.com";
        $client5->user_id = $user3->id;
        $client5->save();

    }
}
