<?php
/**
 * project.
 *
 * @author  Mirfayz Nosirov
 * Created: 01.06.2022 / 07:27
 */

namespace App\Services;

use App\Models\Order;
use App\Models\User;

/**
 * Class OrderService
 * @package App\Services
 */
class OrderService
{
    /**
     * @return OrderService
     */
    public static function getInstance(): OrderService
    {
        return new static();
    }

    public function list()
    {
        return Order::query()
            ->where('user_id', '=', 1)
            ->with('orderItems')
            ->get();
    }
}
