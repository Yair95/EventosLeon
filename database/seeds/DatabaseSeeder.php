<?php

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
        $contact = new App\data_contact();
        $contact->name = 'Isaac';
        $contact->lastname = 'Villaseñor';
        $contact->phone1 = '3312886593';
        $contact->phone2 = '36921722';
        $contact->email = 'juan@hotmail.com';
        $contact->save();

        $client = new App\Client();
        $client->prestige = '5';
        $client->visits = '0';
        $client->comments = 'Buen trabajo';
        $client->data_contact_id = $contact->id;
        $client->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-01-13 11:00:00';
        $events->date_end = '2018-01-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-02-13 11:00:00';
        $events->date_end = '2018-02-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-02-13 11:00:00';
        $events->date_end = '2018-02-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-01-13 11:00:00';
        $events->date_end = '2018-01-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-01-13 11:00:00';
        $events->date_end = '2018-01-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-01-13 11:00:00';
        $events->date_end = '2018-01-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-01-13 11:00:00';
        $events->date_end = '2018-01-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-01-13 11:00:00';
        $events->date_end = '2018-01-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-02-13 11:00:00';
        $events->date_end = '2018-02-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-03-13 11:00:00';
        $events->date_end = '2018-03-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-03-13 11:00:00';
        $events->date_end = '2018-03-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-04-13 11:00:00';
        $events->date_end = '2018-04-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-04-13 11:00:00';
        $events->date_end = '2018-04-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-05-13 11:00:00';
        $events->date_end = '2018-05-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-06-13 11:00:00';
        $events->date_end = '2018-06-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-07-13 11:00:00';
        $events->date_end = '2018-07-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-07-13 11:00:00';
        $events->date_end = '2018-07-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-07-13 11:00:00';
        $events->date_end = '2018-07-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-07-13 11:00:00';
        $events->date_end = '2018-07-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-07-13 11:00:00';
        $events->date_end = '2018-07-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-07-13 11:00:00';
        $events->date_end = '2018-07-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-08-13 11:00:00';
        $events->date_end = '2018-08-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-09-13 11:00:00';
        $events->date_end = '2018-09-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-09-13 11:00:00';
        $events->date_end = '2018-09-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-09-13 11:00:00';
        $events->date_end = '2018-09-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-09-13 11:00:00';
        $events->date_end = '2018-09-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-10-13 11:00:00';
        $events->date_end = '2018-10-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-10-13 11:00:00';
        $events->date_end = '2018-10-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-10-13 11:00:00';
        $events->date_end = '2018-10-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-10-13 11:00:00';
        $events->date_end = '2018-10-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-10-13 11:00:00';
        $events->date_end = '2018-10-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-10-13 11:00:00';
        $events->date_end = '2018-10-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-10-13 11:00:00';
        $events->date_end = '2018-10-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-11-13 11:00:00';
        $events->date_end = '2018-11-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-11-13 11:00:00';
        $events->date_end = '2018-11-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-11-13 11:00:00';
        $events->date_end = '2018-11-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-11-13 11:00:00';
        $events->date_end = '2018-11-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();

        $events = new App\Event();
        $events->client_id = $client->id;
        $events->user = 'isaachvc@hotmail.com';
        $events->total = '7600';
        $events->additional_hour = '200';
        $events->additional_people = '60';
        $events->date_start = '2018-12-13 11:00:00';
        $events->date_end = '2018-12-13 19:00:00';
        $events->status = '0';
        $events->people = '100';
        $events->save();
    }
}
