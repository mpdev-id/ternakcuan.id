<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\WebConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class WhatsappController extends Controller
{
    public function storeContactMe(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    $contact = new Contact();
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->message = $request->message;
    $contact->status  = 'notsend';
    $contact->save();

    $response = $this->sendWhatsAppMessageToAdmin($contact);

    if (isset($response['error'])) {
        $contact->status = 'notsend';
        $contact->save();
        Mail::raw('Pesan gagal dikirimkan ke Admin WA! Nama: ' . $contact->name . ', Email: ' . $contact->email . ', Pesan: ' . $contact->message, function ($message) {
            $message->from('admin@ternakcuan.id', 'Ternak Cuan');
            $message->to('mnprasetya@gmail.com');
            $message->subject('Pesan gagal dikirimkan ke Admin');
        });
        return redirect()->back()->with('success', 'Admin kami akan segera menghubungi anda, terima kasih 🚀👋');
    } else {
        $contact->status = 'send';
        $contact->save();
        return redirect()->back()->with('success', 'Admin kami akan segera menghubungi anda, terima kasih 👋 🚀');
    }
}

public function sendWhatsAppMessageToAdmin(Contact $contact)
{
    // $adminPhone = WebConfig::first()->phone;
    // dd($adminPhone);
    $adminPhone = '83841167449';
    $realNumber = preg_replace('/[^0-9]/', '', $adminPhone);
    $phone = '62' . $realNumber;
    // $templateID = 'd105092c-56a2-4569-88f3-71cb0cf5b217';
    $templateID = '4ed19b5a-8f33-4084-ab81-e994954361ba';
    $email = $contact->email;
    $name = $contact->name;
    $pesan = $contact->message ;
    return $this->sendWhatsAppMessage($phone, $templateID, [
        'name' => $name,
        'email' => $email,
        'message' => url('/').' 💌 '. $pesan,
    ]);
}

public function sendWhatsAppMessage($phone, $template_id, $variables)
{
    try {
        $response = Http::asForm()->get('http://wa.mpdev.my.id/api/create-message', [
            'appkey' => '176e2f90-e296-4ad3-ba8d-21800df7291e',
            'authkey' => 'l7onU0XO2sUSm76Mo72PtqGC3X2rGrzHCly6zAn3kt28Kcf61f',
            'to' => $phone,
            'template_id' => $template_id,
            'variables' => $variables,
        ]);

        return json_decode($response->body(), true);
    } catch (\Exception $e) {
        return ['error' => $e->getMessage()];
    }
}
}
