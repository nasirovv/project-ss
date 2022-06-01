<?php
/**
 * project.
 *
 * @author  Mirfayz Nosirov
 * Created: 01.06.2022 / 06:42
 */

namespace App\Services;

use App\Models\Category;

/**
 * Class CategoryService
 * @package App\Services
 */
class CategoryService
{
    /**
     * @return CategoryService
     */
    public static function getInstance(): CategoryService
    {
        return new static();
    }

    public function list()
    {
        return Category::query()
            ->where('active', '=', true)
            ->get();
    }
}
