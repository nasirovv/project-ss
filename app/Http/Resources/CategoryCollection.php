<?php
/**
 * project.
 *
 * @author  Mirfayz Nosirov
 * Created: 01.06.2022 / 06:45
 */

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * Class CategoryCollection
 * @package App\Http\Resources
 */
class CategoryCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return $this->collection->transform(function (Category $category) {
            return [
                'id'     => $category->getId(),
                'name'   => $category->getName(),
                'active' => $category->getIsActive()
            ];
        });
    }
}
