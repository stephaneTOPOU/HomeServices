<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class GenerateSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'slug:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate slugs for existing records';

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
     * @return int
     */
    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {

            $baseSlug = Str::slug($user->name);

            $count = 1;

            // Check if the slug already exists in the database
            while (User::where('slug', $baseSlug)->where('id', '!=', $user->id)->exists()) {
                $baseSlug = Str::slug($user->name) . '-' . $count;
                $count++;
            }

            $user->update(['slug' => $baseSlug]);

        }

        $this->info('Slugs generated for existing records.');
    }
}
