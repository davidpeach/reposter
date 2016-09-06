<?php

namespace App\Console\Commands\Quantified;

use Cache;
use Carbon\Carbon;
use App\Music\Listen;
use App\Music\ListenSaver;
use Illuminate\Console\Command;
use App\Music\LastFmMusicImportParser as MusicImportParser;

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
    public function __construct(MusicImportParser $parser, ListenSaver $listenSaver)
    {
        parent::__construct();

        $this->parser = $parser;

        $this->listenSaver = $listenSaver;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $lastfm = new \Dandelionmood\LastFm\LastFm( env('LASTFM_API_KEY'), env('LASTFM_API_SECRET') );

        $lastRetrievedListen = Listen::lastRetrieved();
dd($lastRetrievedListen);
        $recentListens = $lastfm->user_getRecentTracks([
            'user' => 'david_peach',
            'limit' => env('LASTFM_IMPORT_LIMIT'),
            'from' => $lastRetrievedListen,
            'to' => with(Carbon::now())->timestamp
        ]);

        $preparedListens = $this->parser->prepare($recentListens);
dd($preparedListens);
        if ($preparedListens) {
            $this->listenSaver->save($preparedListens);
        }

        return;
    }
}
