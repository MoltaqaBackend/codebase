<?php

namespace App\Http\Controllers\Api\V1\Transaction;

use App\Actions\Transaction\MyFatoorahAction;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

/**
 * @group Payment
 *
 * @subgroup My-Fatorah
 * @subgroupDesription My-Fatorah Payment
 */
class PaymentController extends Controller
{
    use ApiResponseTrait;
    protected ?MyFatoorahAction $myFatoorah;

    public function __construct()
    {
        $this->myFatoorah = MyFatoorahAction::instance();
    }

    /**
     * Create Invoice.
     *
     * an API which Offers a mean to create an invoice
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     *
     * @bodyParam pay_id required unique identitfer.Example: dbkdjfbskdbfnkj4hrkb4khb43
     */
    public function createInvoice(Request $request)
    {
        $validated = $request->validate([
            'pay_id' => 'required|uuid',
        ]);
        $transactions = Transaction::wherePayId($validated['pay_id'])->firstOrFail();
        [$status, $response] = $this->myFatoorah->makeInvoice($transactions);

        return $this->setStatusCode($status)->respondWithArray(['invoice' => $response]);
    }

    /**
     * Verify Payment Invoice Proccessed.
     *
     * an API which Offers a mean to verify inovice payment
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     *
     * @bodyParam paymentId required.Example: dbkdjfbskdbfnkj4hrkb4khb43
     */
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
