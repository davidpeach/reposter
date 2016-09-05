<?php

namespace App\Music;

class ListenSaver
{
	/**
	 * Save the listens to the database.
	 * Also ensuring the Artist, Album and Song relationships are present
	 *
	 * @param array $listens
	 * @return void
	 */
	public function save(array $listens)
	{
		// Create models and migrations for Artists, Albums, Songs, Listens

		// Make sure artist exists
		// Make sure album exists
		// Make sure song exists
		// Then Save the listen.
	}
}