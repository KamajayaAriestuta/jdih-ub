<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\DB;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nb = (int) $this->command->ask('How many messages do you want to generate', 100);
        $users = User::all();
        Message::factory($nb)->make()->each(function ($message) use($users) {
            $message->user_id = $users->random()->id;
            $message->receiver = User::where('role', 'admin')->first()->id;
            $message->save();
        });
    }
}
