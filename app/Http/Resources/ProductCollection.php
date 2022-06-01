<?php
/**
 * project.
 *
 * @author  Mirfayz Nosirov
 * Created: 01.06.2022 / 07:04
 */

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class ProductCollection
 * @package App\Http\Resources
 */
class ProductCollection extends ResourceCollection
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        /** @var LengthAwarePaginator $lengthAwarePaginator */
        $lengthAwarePaginator = $this->resource;

        $products = $this->collection->transform(function (Product $product) {
            return [
                'id'            => $product->getId(),
                'name'          => $product->getName(),
                'description'   => $product->getDescription(),
                'price'         => $product->getPrice(),
                'quantity'      => $product->getQuantity(),
                'category_name' => $product->category->getName()
            ];
        });

        return [
            'total'       => $lengthAwarePaginator->total(),
            'perPage'     => $lengthAwarePaginator->perPage(),
            'currentPage' => $lengthAwarePaginator->currentPage(),
            'list'        => $products->all()
        ];
    }
}
