<?php

namespace App\Music;

class LastFmMusicImportParser
{
	public function prepare($response)
	{
		if ( ! property_exists($response, 'recenttracks')) {
			return false;
		}

		if ( ! property_exists($response->recenttracks, 'track')) {
			return false;
		}


		if ( ! is_array($response->recenttracks->track)) {
			return false;
		}

		
		$tracks = collect($response->recenttracks->track);

		$returnData = [];

		foreach ($tracks as $track) {
						
			$artistName = $track->artist->{'#text'};
			$songTitle = $track->name;
			$albumTitle = $track->album->{'#text'};
			$timestamp = $track->date->uts;
			$albumImages = is_array($track->image) ? serialize($track->image) : null;

			$returnData[] = [
				'artist_name' => $artistName,
				'song_title' => $songTitle,
				'album_title' => $albumTitle,
				'listen_timestamp' => $timestamp,
				'album_images' => $albumImages,
			];

		}

		return $returnData;		
	}
}