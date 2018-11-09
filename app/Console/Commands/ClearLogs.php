<?php

namespace App\Console\Commands;

use Illuminate\Filesystem\Filesystem;

class ClearLogs extends Command
{
    /**
     * @var Filesystem
     */
    private $filesystem;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:logs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deletes all files in /storage/logs with a .log extension';

    /**
     * ClearLogs constructor.
     * @param Filesystem $filesystem
     */
    public function __construct(Filesystem $filesystem)
    {
        parent::__construct();
        $this->filesystem = $filesystem;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $files = $this->filesystem->files('storage/logs');
        $this->line('Searching for log files');
        foreach ($files as $file) {
            if ($this->filesystem->extension($file) === 'log') {
                $this->filesystem->delete($file);
                $this->line($file . ' deleted');
            }
        }
    }
}