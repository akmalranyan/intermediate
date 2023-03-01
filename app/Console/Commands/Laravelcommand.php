<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Laravelcommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:basic
    {argument : ini adalah deskripsi argument}
    {--o|opsi=: ini adalah opsi}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Laravel Basic Command';

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
        $this -> info("Informasi yang muncul dalam terminal");//info, teks hijau
        $this -> error("Something went wrong");//error
        $this -> line("Display this on screen");//pesan biasa

        $this -> line(print_r($this->options())).' '. print_r($this->arguments());
        $this -> line($this->option('opsi').' '.$this->argument('argument'));

        $name = $this->ask("what is your name lol");
        $password= $this->secret("Input your credit card number >:)");
        if ($this->confirm("Smile for your parent (they will lose their house if you proceed)")) {
            $this->line($name." ".$password);
        }
    }
}
