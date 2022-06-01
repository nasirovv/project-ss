<?php
/**
 * project.
 *
 * @author  Mirfayz Nosirov
 * Created: 01.06.2022 / 06:33
 */

namespace App\Http\Controllers;

use App\Http\Resources\CategoryCollection;
use App\Http\Resources\OrderCollection;
use App\Http\Resources\ProductCollection;
use App\Services\CategoryService;
use App\Services\OrderService;
use App\Services\ProductService;
use Exception;

/**
 * Class MainController
 * @package App\Http\Controllers
 */
class MainController extends Controller
{
    public function categories()
    {
        $message = null;
        $code = 200;

        try {
            $categories = CategoryService::getInstance()->list();

            return $this->render_json(
                new CategoryCollection($categories),
                'Success'
            );
        } catch (Exception $exception) {
            $message = $exception->getMessage();
            $code = $exception->getCode() === 0 ? 400 : $exception->getCode();
        }

        return $this->render_json([], $message, $code, ($code === 200));
    }

    public function products()
    {
        $message = null;
        $code = 200;

        try {
            $products = ProductService::getInstance()->list();

            return $this->render_json(
                new ProductCollection($products),
                'Success'
            );
        } catch (Exception $exception) {
            $message = $exception->getMessage();
            $code = $exception->getCode() === 0 ? 400 : $exception->getCode();
        }

        return $this->render_json([], $message, $code, ($code === 200));
    }

    public function orders()
    {
        $message = null;
        $code = 200;

        try {
            $orders = OrderService::getInstance()->list();

            return $this->render_json(
                new OrderCollection($orders),
                'Success'
            );
        } catch (Exception $exception) {
            $message = $exception->getMessage();
            $code = $exception->getCode() === 0 ? 400 : $exception->getCode();
        }

        return $this->render_json([], $message, $code, ($code === 200));
    }
}
