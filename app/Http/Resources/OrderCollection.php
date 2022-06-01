<?php
/**
 * project.
 *
 * @author  Mirfayz Nosirov
 * Created: 01.06.2022 / 07:28
 */

namespace App\Http\Resources;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * Class OrderCollection
 * @package App\Http\Resources
 */
class OrderCollection extends ResourceCollection
{
    public function toArray($request)
    {
        $data = $this->collection->transform(function (Order $order) {
            return [
                'id'          => $order->getId(),
                'address'     => $order->getAddress(),
                'status'      => $order->getStatus(),
                'order_items' => $order->orderItems->transform(function (OrderItem $orderItem) {
                    return [
                        'product_name' => $orderItem->product->getName(),
                        'quantity'     => $orderItem->getQuantity(),
                        'price'        => $orderItem->product->getPrice()
                    ];
                })
            ];
        });

        return $data->all();
    }
}
