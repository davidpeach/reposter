<?php

namespace App\Console\Commands\Quantified;

use Cache;
use App\Music\LastFmMusicImportParser as MusicImportParser;
use Illuminate\Console\Command;

class ImportSongsListenedTo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quantified:importmusic';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import music from external listen tracking. Currently this is Last FM.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(MusicImportParser $parser)
    {
        parent::__construct();

        $this->parser = $parser;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $lastfm = new \Dandelionmood\LastFm\LastFm( env('LASTFM_API_KEY'), env('LASTFM_API_SECRET') );

        $recentListens = Cache::remember('recentListens', 60, function() use ($lastfm) {
            return $lastfm->user_getRecentTracks([
                    'user' => 'david_peach',
                    'limit' => 2,
                ]);
        });

        $preparedListens = $this->parser->prepare($recentListens);

        $this->listenSaver->save($preparedListens);
    }
}
