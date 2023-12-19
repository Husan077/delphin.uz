<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Beautifuladdres;
use App\Models\Customerfeedback;
use App\Models\Customerimages;
use App\Models\Locations;
use App\Models\Results;
use App\Models\Tripsdetails;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Telegram\Bot\Laravel\Facades\Telegram;

class HomeController extends Controller
{

    public function index()
    {
        $banners = Banners::all();
        $beautifuladdres = Beautifuladdres::all();
        $customerfeedbacks = Customerfeedback::all();
        $tripsdetails = Tripsdetails::limit(9)->get();
        $headerdetails = Tripsdetails::limit(7)->get();
        $results = Results::limit(4)->get();
        $locations = Locations::all();
        $customerimages = Customerimages::all();

        return view('site.index', compact(
            "banners", "beautifuladdres", "customerfeedbacks", "results", "tripsdetails", "customerimages", "locations", 'headerdetails'));
    }

    public function sendToTg(Request $request)
    {
        if ($request->carta_selection == 'Click') {
            return redirect()->to(
                "https://my.click.uz/services/pay?service_id=$request->service_id&merchant_id=$request->merchant_id&amount=$request->amount&transaction_param=$request->trip_id&return_url=$request->return_url");
        }
        if ($request->carta_selection == "money") {
            $this->validate($request,
                ['phone' => 'required'],
                ['name' => 'required'],
            );

            Telegram::sendMessage([
                'chat_id' => env('TELEGRAM_CHANNEL_ID', ' -1002096656955'),
                'parse_mode' => 'HTML',
                'text' => "<b>Новая обращение!</b>\n"
                    . "\n"
                    . "<b>Имя клиента</b>: $request->name\n"
                    . "<b>Тел номер</b>: $request->phone\n"
                    . "<b>Платежная карта</b>: $request->carta_selection\n"
                    . "<b>Сообщение</b>: $request->message\n"

            ]);
            Alert::success('Оплата принято', 'Скоро мы свяжемся с вами');
            return redirect()->back();
        }

//        Alert::success('Обращение принято', 'Скоро мы свяжемся с вами');
//        return redirect()->to(
//            "https://my.click.uz/services/pay?service_id=$request->service_id&merchant_id=$request->merchant_id&amount=$request->amount&transaction_param=$request->trip_id&return_url=$request->return_url");

//        return redirect()->back();
    }

    public function sendTg(Request $request)
    {
        $this->validate($request,
            ['phone' => 'required'],
            ['name' => 'required'],
        );

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', ' -1002096656955'),
            'parse_mode' => 'HTML',
            'text' => "<b>Новая обращение!</b>\n"
                . "\n"
                . "<b>Имя клиента</b>: $request->name\n"
                . "<b>Тел номер</b>: $request->phone\n"
                . "<b>Сообщение</b>: $request->message\n"

        ]);
        Alert::success('Обращение принято', 'Скоро мы свяжемся с вами');
        return redirect()->back();
    }
}
