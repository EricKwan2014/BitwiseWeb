<?php

namespace Api\Transformers;

use App\Elderly;
use League\Fractal\TransformerAbstract;

class ElderlyTransformer extends TransformerAbstract
{
	public function transform(Elderly $elderly)
	{
		return [
			'elderly_id' 	=> (int) $elderly->id,
			'percentage'	=> $elderly->percentage,
			'date'			=> $elderly->updated_at,
			'name'  		=> $elderly->name
		];
	}
}