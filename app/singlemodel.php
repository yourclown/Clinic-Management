<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class singlemodel extends Model
{

	public static function call_procedure($procName, $parameters = null, $isExecute = false)
	{

		$syntax = '';
		for ($i = 0; $i < count($parameters); $i++) {
			$syntax .= (!empty($syntax) ? ',' : '') . '?';
		}
		$syntax = 'CALL ' . $procName . '(' . $syntax . ');';

		$pdo = DB::connection()->getPdo();
		$pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, true);
		$stmt = $pdo->prepare($syntax, [\PDO::ATTR_CURSOR => \PDO::CURSOR_SCROLL]);
		for ($i = 0; $i < count($parameters); $i++) {
			$stmt->bindValue((1 + $i), $parameters[$i]);
		}
		$exec = $stmt->execute();
		if (!$exec) return $pdo->errorInfo();
		if ($isExecute) return $exec;

		$results = [];
		do {
			try {
				$results[] = $stmt->fetchAll(\PDO::FETCH_OBJ);
			} catch (\Exception $ex) {
			}
		} while ($stmt->nextRowset());

		if (2 === count($results)) return $results[0];
		return $results;
	}
}
