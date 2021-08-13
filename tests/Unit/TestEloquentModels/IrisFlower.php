<?php

namespace Tests\Unit\TestEloquentModels;

use Illuminate\Database\Eloquent\Model;
use Rubix\ML\Extractors\CSV;
use Sushi\Sushi;

class IrisFlower extends Model
{
    use Sushi;

    protected $casts = [
        'sepal_length_cm' => 'float',
        'sepal_width_cm' => 'float',
        'petal_length_cm' => 'float',
        'petal_width_cm' => 'float',
        'iris_plant_type' => 'string',
    ];

    public function getRows()
    {
        $data = new CSV(__DIR__ .'/csv/bezdekiris.csv', true);
        $rows = iterator_to_array($data);
        return $rows;
    }
}
