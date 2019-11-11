<?php
// Abe: Service monitoring

namespace AdminPanel\Entry;

/*
 * The idea behind this is to be able to monitor services throughout a server on an admin panel.
 *
*/

/*
 * Entry is an instant of a log.
 * @param string    $ip        The ip address associated with the log
 * @param string    $logtime   The time in which the log was created.
 * @param string    $log       The actual log from the src
 */
class GenericEntry
{
	public function __toString() : string
	{
		return 'GENERIC';
	}

}
