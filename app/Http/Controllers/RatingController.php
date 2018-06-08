<?php namespace App\Http\Controllers;

use App\rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RatingController extends Controller
{

    public function saveRating(Request $req)
    {

        $rait = new rating();
        $ip = new rating();
        $data = Input::All();
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            $tmp = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $ipAddress = array_pop($tmp);
        }

        if (!($ip->where('ip', '=', $ipAddress)->where('entity_name', '=', $data['entity_name'])->where('entity_id', '=', $data['entity_id'])->count() > 0)) {

            $rait['ip'] = $ipAddress;
            $rait['entity_name'] = $data['entity_name'];
            $rait['entity_id'] = $data['entity_id'];
            if ($data['raiting'] < 1) {
                $data['raiting'] = 1;
            } elseif ($data['raiting'] > 5) {
                $data['raiting'] = 5;
            }
            $rait['value'] = $data['raiting'];
            $rait->save();


            $raiting = $rait->where('entity_id', '=', $data['entity_id'])->get();
            $raiting_front['count'] = $raiting->count();
            //=Средняя оценка============================
            $sum = 0;
            foreach ($raiting as $item) {
                $sum += $item['value'];
            }
            $raiting_front['sred'] = round($sum / $raiting_front['count'], 1);
            //===========================================


            //=Процент для вывода рейтинга в верстке=====
            $raiting_front['proc'] = ($sum * 100) / ($raiting_front['count'] * 5);


            return ['status' => 'OK', 'raiting' => $raiting_front, 'text' => 'Спасибо, ваш голос учтен','ip' => $req->ip()];
        } else {
            return ['status' => 'NO', 'text' => 'Извините, вы уже голосовали.','ip' => $ipAddress];
        }
    }

}
