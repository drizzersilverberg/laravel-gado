<?php

namespace App\Transformers\Store;

use League\Fractal\TransformerAbstract;
use App\Entities\Store\Product;

/**
 * Class ProductTransformer.
 *
 * @package namespace App\Transformers\Store;
 */
class ProductTransformer extends TransformerAbstract
{
    /**
     * Transform the Product entity.
     *
     * @param \App\Entities\Store\Product $model
     *
     * @return array
     */
    public function transform(Product $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
