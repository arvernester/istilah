<?php

namespace App\Console\Commands\Vendor\Kitabgaul;

use App\Models\Urban\Description;
use App\Models\Urban\Dictionary;
use Illuminate\Console\Command;
use Unirest\Request;

class LatestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kitabgaul:latest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get latest words from kitabgaul.com';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $response = Request::get('https://kitabgaul.com/api/entries;latest?maxCount=1000');

        bcscale(0);
        foreach ($response->body->entries as $body) {
            $dictionary = Dictionary::firstOrNew(['word' => strtolower($body->word)])
                ->fill([
                    'metadata' => [
                        'description' => $body->definition,
                        'author' => [
                            'name' => $body->authorName,
                            'id' => $body->authorId,
                        ],
                    ],
                ]);
            $dictionary->save();

            $dictionary->descriptions()->save(Description::create([
                'dictionary_id' => $dictionary->id,
                'description' => $body->definition,
            ]));
        }
    }
}
