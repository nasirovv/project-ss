<?php
/**
 * project.
 *
 * @author  Mirfayz Nosirov
 * Created: 01.06.2022 / 06:59
 */

namespace App\Services;

use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class ProductService
 * @package App\Services
 */
class ProductService
{
    /**
     * @return ProductService
     */
    public static function getInstance(): ProductService
    {
        return new static();
    }

    /**
     * @return LengthAwarePaginator
     */
    public function list(): LengthAwarePaginator
    {
        return Product::query()
            ->where('active', '=', true)
            ->whereHas('category', function (Builder $q){
                $q->where('active', '=', true);
            })
            ->paginate(10);
    }
}
