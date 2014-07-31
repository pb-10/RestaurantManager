<?php namespace Petrovic\Transformers;

class TableTransformer extends Transformer{

	public function transform($table)
	{
		return [
			'id' => $table['id'],
			'number' => $table['number'],
			'seats' => $table['seats'],
			'position' => $table['position'],
			'description' => $table['description'],
			'available' => $table['available'],
			'image_url' => $table['image_url']
		];
	}
}