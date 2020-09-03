<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RefreshDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // cara menjalankan
    // php artisan refresh:database
    protected $signature = 'refresh:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is usefull to refresh all database and seed the default data';

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
        // php artisan migrate:refresh
        $this->call('migrate:refresh');

        $categories = collect(['Framework', 'Code']);
        $categories->each(function($c){
            \App\Category::create([
                'name'  => $c,
                'slug'  =>\Str::slug($c)
            ]);
        });

        $tags = collect(['Laravel', 'Fundation','Bug','Slim','Help']);
        $tags->each(function($c){
            \App\Tag::create([
                'name'  => $c,
                'slug'  =>\Str::slug($c)
            ]);
        });

        $this->info('All database has been refreshed and seeded.');
    }
}
