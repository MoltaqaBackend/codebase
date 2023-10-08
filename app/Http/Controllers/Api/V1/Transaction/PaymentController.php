<?php

namespace App\Http\Controllers\Api\V1\Transaction;

use App\Actions\Transaction\MyFatoorahAction;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    use ApiResponseTrait;
    protected ?MyFatoorahAction $myFatoorah;

    public function __construct()
    {
        $this->myFatoorah = MyFatoorahAction::instance();
    }

    public function createInvoice(Request $request)
    {
        $validated = $request->validate([
            'pay_id' => 'required|uuid',
        ]);
        $transactions = Transaction::wherePayId($validated['pay_id'])->firstOrFail();
        [$status, $response] = $this->myFatoorah->makeInvoice($transactions);

        return $this->setStatusCode($status)->respondWithArray(['invoice' => $response]);
    }

    public function callbackPayInvoice(Request $request)
    {
        $request->validate(['paymentId' => 'required']);

        $paymentData = $this->myFatoorah->getPaymentStatus($request->paymentId, 'PaymentId');
        $transaction = Transaction::wherePayId(data_get($paymentData, 'CustomerReference'))->firstOrFail();

        if (data_get($paymentData, 'InvoiceStatus') == 'Paid') {
            # Update Transaction Table Data
            $this->payServices($transaction, $paymentData);

        }

        return $this->setStatusCode(200)->respondWithArray(['invoice' => $paymentData]);
    }

    private function payServices(Transaction $transaction, $paymentData)
    {
        $transaction->update([
            'paid_at' => now(),
            'pay_id' => data_get($paymentData, 'InvoiceId'),
        ]);
    }

}
