<?php

namespace App\Http\Controllers;

use Explicador\E2PaymentsPhpSdk\Mpesa;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testPayment(Request $request) {

        // Set the consumer key and consumer secret as follows
        $mpesa = new Mpesa();
        $mpesa->setClientId('9707a5b8-6ff0-46d0-bd4b-40ff36254c2e'); // TODO: Trocar essas credencias
        $mpesa->setClientSecret('mMUczY7UvUPU8G9TbMKNfxu2QK1GzLUdgxtCHhR7'); // TODO: Trocar essas credencias
        $mpesa->setWalletId('');// TODO: Colocar o codigo da carteira

        $phone_number = '848451054';
        $amount = '10';
        $reference = 'TestPayment'; // nao pode ter espacos...

        //This creates transaction between an M-Pesa short code to a phone number registered on M-Pesa.
        $result = $mpesa->c2b($phone_number, $amount, $reference);

        dd($result);

    }
}
