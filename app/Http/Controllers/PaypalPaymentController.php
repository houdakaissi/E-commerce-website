<?php

namespace App\Http\Controllers;
 

//You actually don't have to import any class as Laravel registers a global alias Route.
//If you want to import the right class, that would be:
 

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use App\Order;
class PaypalPaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function handlePayment()
    {
        $data = [];
        $data['items'] = [];

        foreach (\Cart::getContent() as $item) {
            array_push($data['items'], [
                'name' => $item->name,
                'price' => (int) ($item->price / 9),
                'desc' => $item->associatedModel->description,
                'qty' => $item->quantity
            ]);
        }


        $data['invoice_id'] = auth()->user()->id;
        $data['invoice_description'] = "Commande #{$data['invoice_id']}";
        $data['return_url'] = route('success.payment');
        $data['cancel_url'] = route('cancel.payment');

        $total = 0;
        foreach ($data['items'] as $item) {
            $total += $item['price'] * $item['qty'];
        }

        $data['total'] = $total;
        $paypalModule = new ExpressCheckout;

        $res = $paypalModule->setExpressCheckout($data);
        $res = $paypalModule->setExpressCheckout($data, true);

        return json_encode(redirect($res['paypal_link'])) ;
    }

    public function paymentCancel()
    {
        return  json_encode(redirect()->route('cart.index')->with([
            'info' => 'Order canceled' 
        ]));
    }

    public function paymentSuccess(Request $request)
    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);
        if (in_array(response($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            foreach (\Cart::getContent() as $item) {
                Order::create([
                    "user_id" => auth()->user()->id,
                    "product_name" => $item->name,
                    "qty" => $item->quantity,
                    "price" => $item->price,
                    "total" => $item->price * $item->quantity,
                    "paid" => 1
                ]);
                \Cart::clear();
            }
             return json_encode(redirect()->route('cart.index')->with([
                'success' => 'Paid successfully'
            ]));
        }
    }
}
