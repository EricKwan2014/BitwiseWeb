<?php

namespace Api\Transformers;

use App\Report;
use League\Fractal\TransformerAbstract;

class ReportTransformer extends TransformerAbstract
{
	public function transform(Report $report)
	{
		return [
			'report_id' 	=> (int) $report->report_id,
			'elderly_id' 	=> (int) $report->elderly_id,
			'attempt_num'	=> (int) $report->attempt_num,
			'percentage'	=> $report->percentage,
			'date'			=> $report->updated_at,
			'goal'			=> (int) $report->goal
		];
	}
}