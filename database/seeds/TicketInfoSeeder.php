<?php

use Illuminate\Database\Seeder;

class TicketInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ticketInformation::truncate();

        $faker = \Faker\Factory::create();

        $user_ids = \App\userInformation::all()->pluck('user_id')->toArray();
        $ticket_ids = \App\ticketComment::all()->pluck('user_ticket_id')->toArray();

        for ($i = 0; $i < 15; $i++)
        {
            \App\ticketInformation::create([
                'user_ticket_id' => $faker->ramdomElement($ticket_ids),
                'operating_system' => $faker->word,
                'software_issue' => $faker->sentence,
                'description' => $faker->paragraph,
                'status' => 'Pending',
                'user_id' => $faker->randomElement($user_ids)
            ]);
        }
    }
}
