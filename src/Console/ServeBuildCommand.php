<?php

namespace LogikSuite\Build\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Artisan;

class ServeBuildCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'logikbuild:serve';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Serve the LogikBuild UI on the PHP development server';


    /**
     * Execute the console command.
     *
     * @return int
     *
     * @throws \Exception
     */
    public function handle()
    {

        $_ENV["LOGIKSUITE_BUILD_PROJECT_ROOT"] = getcwd();

        $this->line("<info>Open the followin page in your web browser to access LogikBuild</info> http://{$this->host()}:6969/logikbuild");

        Artisan::call('serve', [
            '--port' => '6969'
        ]);
    }
}
