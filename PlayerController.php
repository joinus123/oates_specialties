<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Exception;
use Carbon\Carbon;

class PlayerController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'player_id' => ['required'],
            // 'full_name' => ['required', 'string', 'max:255'],
            // 'email'     => ['required', 'email', 'regex:/(.*)@gmail\.com/i', 'unique:players'],
            // 'password'  => ['required', 'string', 'min:8'],
            // 'country'   => ['required'],
        ]);
        $code       = config('constants.API.CODE.BADREQUEST');
        $message    = config('constants.API.STATUS.BADREQUEST');
        $status     = config('constants.API.STATUS.BADREQUEST');
        if(!$validator->fails())
        {
            $dt = Carbon::now();
            $data = [
                'player_id' => $request->input('player_id'),
                'full_name' => $request->input('full_name')?$request->input('full_name'):NULL,
                'email'     => $request->input('email')?$request->input('email'):NULL,
                'password'  => Hash::make('password')?Hash::make('password'):NULL,
                'country'   => $request->input('country')?$request->input('country'):NULL,
                'api_token' => Str::random(60),
                'platform'  => $request->input('platform')?$request->input('platform'):NULL,
                'image'     => $request->input('image')?$request->input('image'):NULL,
                'score'     => $request->input('score')?$request->input('score'):0,
                'remaining_number_of_hints'=> $request->input('remaining_number_of_hints')?$request->input('remaining_number_of_hints'):0,
                'created_at'=> $dt->toDateTimeString(),
            ];
            $player = DB::table('players')->where('player_id', $request->input('player_id'))->get();
            if(count($player->all())>0){
                $update_data = [
                    'player_id' => $request->input('player_id')?$request->input('player_id'):$player[0]->player_id,
                    'full_name' => $request->input('full_name')?$request->input('full_name'):$player[0]->full_name,
                    'email'     => $request->input('email')?$request->input('email'):$player[0]->email,
                    'password'  => Hash::make('password')?Hash::make('password'):$player[0]->full_name,
                    'country'   => $request->input('country')?$request->input('country'):$player[0]->password,
                    'api_token' => Str::random(60),
                    'platform'  => $request->input('platform')?$request->input('platform'):$player[0]->platform,
                    'image'     => $request->input('image')?$request->input('image'):$player[0]->image,
                    'score'     => $request->input('score')?$request->input('score'):$player[0]->score,
                    'remaining_number_of_hints'=> $request->input('remaining_number_of_hints')?$request->input('remaining_number_of_hints'):$player[0]->remaining_number_of_hints,
                    'updated_at'=> $dt->toDateTimeString(),
                ];
                DB::table('players')->where('player_id', $request->input('player_id'))->update($update_data); 
            }else{
                 DB::table('players')->insert($data);
            }
            $player = DB::table('players')
                                    ->select('players.*')  
                                    ->where('player_id', '=', $request->input('player_id'))
                                    ->get()->toArray();
            $login_data = [
                'player_id' => $request->input('player_id'),
                'auth_token' => Str::random(60),
                'created_at'=> $dt->toDateTimeString(),
            ];
            $id  = DB::table('login')->insertGetId($login_data);
            $login = DB::table("login")->where("login_id", "=", $id)->get();
            $responseData = [
                'status' => config('constants.API.STATUS.SUCCESS'),
                'code'   => config('constants.API.CODE.SUCCESS'),
                'message'=> 'Player Login Successfully from SignUp',
                'full_name'=>$player[0]->full_name,
                'email'=>$player[0]->email,
                'password'=>$player[0]->password,
                'platform'=>$player[0]->platform,
                'country'=>$player[0]->country,
                'score'=>$player[0]->score,
                'remaining_number_of_hints'=>$player[0]->remaining_number_of_hints,
                'auth_token'=>$login[0]->auth_token,
            ];
        }else{
            $responseData = [
                'status'=>$status,
                'code'=>$code,
                'message'=>$validator->errors()->all()
            ];
        }
        return response()->json($responseData);
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'     => ['required', 'email', 'exists:players'],
            'password'  => ['required', 'string', 'min:8'],
        ]);
        $code       = config('constants.API.CODE.BADREQUEST');
        $message    = config('constants.API.STATUS.BADREQUEST');
        $status     = config('constants.API.STATUS.BADREQUEST');
        if(!$validator->fails())
        {
            $player = DB::table("players")->where("email", "=", $request->input('email'))->get();
            if( ! Hash::check( $player[0]->password, $request->input('password') ) )
            {
                $dt = Carbon::now();
                $data = [
                    'player_id' => $player[0]->player_id,
                    'auth_token' => Str::random(60),
                    'created_at'=> $dt->toDateTimeString(),
                ];
                DB::table('login')->where('player_id', $player[0]->player_id)->update(array('status' => 0,'updated_at'=>$dt->toDateTimeString()));  
                $id  = DB::table('login')->insertGetId($data);
                $login = DB::table("login")->where("login_id", "=", $id)->get();
                $responseData = [
                    'status' => config('constants.API.STATUS.SUCCESS'),
                    'code'   => config('constants.API.CODE.SUCCESS'),
                    'message'=> 'Player Login Successfully',
                    'full_name'=>$player[0]->full_name,
                    'email'=>$player[0]->email,
                    'password'=>$player[0]->password,
                    'platform'=>$player[0]->platform,
                    'country'=>$player[0]->country,
                    'score'=>$player[0]->score,
                    'remaining_number_of_hints'=>$player[0]->remaining_number_of_hints,
                    'auth_token'=>$login[0]->auth_token,
                ];
            }else{
                $responseData = [
                    'status'=>$status,
                    'code'=>$code,
                    'message'=>"Current Password Error !"
                ];
            }
        }else{
            $responseData = [
                'status'=>$status,
                'code'=>$code,
                'message'=>$validator->errors()->all()
            ];
        }
        return response()->json($responseData);
    }
    public function auth_token(Request $request)
    {
        if ($request->hasHeader('auth-token')) {
            $player = DB::table("login")->where(["auth_token"=>$request->header('auth-token'),'status'=>1])->get();
            $player = $player->all();
            if(count($player)>0){
                return $player[0]->player_id;
            }else{
                return "UNAUTHORIZED";
            }
        }else{
            return "NOTFOUND";
        }
    }
    public function updateProfile(Request $request)
    {
        $res = $this->auth_token($request);
        if($res != "NOTFOUND" && $res != "UNAUTHORIZED"){
            $record  = DB::table('players')->where('player_id', $res)->update($request->all());  
            if($record){
                $responseData = [
                    'status' => 400,
                    'code'   => config('constants.API.CODE.SUCCESS'),
                    'message'=> 'Player Data Updated Successfully',
                ];
                return response()->json($responseData);
            }
        }else{
            if($res == "NOTFOUND"){
                $code       = config('constants.API.CODE.NOTFOUND');
                $message    = "Please Provide auth-token in header";
                $status     = config('constants.API.STATUS.NOTFOUND');
            }else{
                $code       = config('constants.API.CODE.UNAUTHORIZED');
                $message    = "please provide valid token";
                $status     = config('constants.API.STATUS.UNAUTHORIZED');
            }
            return response()->json(['code'=>$code, 'status'=>$status, 'message'=>$message ]);
        }
    }
    public function game(Request $request)
    {
        $res = $this->auth_token($request);
        if($res != "NOTFOUND" && $res != "UNAUTHORIZED"){
            $game_id  = DB::table('games')->insertGetId($request->all()); 
            if($game_id){
                $responseData = [
                    'status' => config('constants.API.STATUS.SUCCESS'),
                    'code'   => config('constants.API.CODE.SUCCESS'),
                    'message'=> 'Game Created Successfully',
                    'game_id'=> $game_id 
                ];
                return response()->json($responseData);
            }
        }else{
            if($res == "NOTFOUND"){
                $code       = config('constants.API.CODE.NOTFOUND');
                $message    = "Please Provide auth-token in header";
                $status     = config('constants.API.STATUS.NOTFOUND');
            }else{
                $code       = config('constants.API.CODE.UNAUTHORIZED');
                $message    = "please provide valid token";
                $status     = config('constants.API.STATUS.UNAUTHORIZED');
            }
            return response()->json(['code'=>$code, 'status'=>$status, 'message'=>$message ]);
        }
    }
    public function opponent_data(Request $request)
    {
        $res = $this->auth_token($request);
        if($res != "NOTFOUND" && $res != "UNAUTHORIZED"){
            $player = DB::table("players")->where(["player_id"=>$request->input('player_id')])->get();
            if(count($player->all())){
                $responseData = [
                    'status' => config('constants.API.STATUS.SUCCESS'),
                    'code'   => config('constants.API.CODE.SUCCESS'),
                    'message'=> 'Opponent Data',
                    'full_name'=>$player[0]->full_name?$player[0]->full_name:NULL,
                    'email'=>$player[0]->email?$player[0]->email:NULL,
                    'image'=>$player[0]->image?$player[0]->image:NULL,
                    'platform'=>$player[0]->platform?$player[0]->platform:NULL,
                    'country'=>$player[0]->country?$player[0]->country:NULL,
                    'score'=>$player[0]->score?$player[0]->score:0,
                    'remaining_number_of_hints'=>$player[0]->remaining_number_of_hints?$player[0]->remaining_number_of_hints:0,
                ];
                return response()->json($responseData);
            }else{
                return response()->json("Opponent Data Not Found");
            }
        }else{
            if($res == "NOTFOUND"){
                $code       = config('constants.API.CODE.NOTFOUND');
                $message    = "Please Provide auth-token in header";
                $status     = config('constants.API.STATUS.NOTFOUND');
            }else{
                $code       = config('constants.API.CODE.UNAUTHORIZED');
                $message    = "please provide valid token";
                $status     = config('constants.API.STATUS.UNAUTHORIZED');
            }
            return response()->json(['code'=>$code, 'status'=>$status, 'message'=>$message ]);
        }
    }
    public function game_winner_looser(Request $request)
    {
        $res = $this->auth_token($request);
        if($res != "NOTFOUND" && $res != "UNAUTHORIZED"){
            $validator = Validator::make($request->all(), [
                'game_id'       => ['required', 'exists:games'],
                'winner_id'     => ['required'],
                'looser_id'     => ['required'],
                'winner_score'  => ['required'],
                'looser_score'  => ['required'],
            ]);
            $code       = config('constants.API.CODE.BADREQUEST');
            $message    = config('constants.API.STATUS.BADREQUEST');
            $status     = config('constants.API.STATUS.BADREQUEST');
            if(!$validator->fails())
            {
                $game_winners_loosers_id  = DB::table('game_winners_loosers')->insertGetId($request->all());
                DB::table('players')->where('player_id', $request->input('winner_id'))->update(['score'=>$request->input('winner_score')]);
                DB::table('players')->where('player_id', $request->input('looser_id'))->update(['score'=>$request->input('looser_score')]);
                $player = DB::table("players")->where(["player_id"=>$request->input('player_id')])->get();
                if($game_winners_loosers_id){
                    $responseData = [
                        'status' => config('constants.API.STATUS.SUCCESS'),
                        'code'   => config('constants.API.CODE.SUCCESS'),
                        'message'=> 'Game Winner & Looser info Added Successfully',
                    ];
                    return response()->json($responseData);
                }else{
                    return response()->json("Something went Wrong");
                }
            }else{
                $responseData = [
                    'status'=>$status,
                    'code'=>$code,
                    'message'=>$validator->errors()->all()
                ];
                return response()->json($responseData);
            }
        }else{
            if($res == "NOTFOUND"){
                $code       = config('constants.API.CODE.NOTFOUND');
                $message    = "Please Provide auth-token in header";
                $status     = config('constants.API.STATUS.NOTFOUND');
            }else{
                $code       = config('constants.API.CODE.UNAUTHORIZED');
                $message    = "please provide valid token";
                $status     = config('constants.API.STATUS.UNAUTHORIZED');
            }
            return response()->json(['code'=>$code, 'status'=>$status, 'message'=>$message ]);
        }
    }
    public function purchases(Request $request)
    {
        $res = $this->auth_token($request);
        if($res != "NOTFOUND" && $res != "UNAUTHORIZED"){
            $validator = Validator::make($request->all(), [
                'player_id'       => ['required', 'exists:players'],
            ]);
            $code       = config('constants.API.CODE.BADREQUEST');
            $message    = config('constants.API.STATUS.BADREQUEST');
            $status     = config('constants.API.STATUS.BADREQUEST');
            if(!$validator->fails())
            {
                $purchases  = DB::table('purchases')->insertGetId($request->all());
                $player = DB::table("players")->where(["player_id"=>$request->input('player_id')])->get();
                $total_p_count = $player[0]->remaining_number_of_hints + $request->input('product_count');
                DB::table('players')->where('player_id', $request->input('player_id'))->update(['remaining_number_of_hints'=>$total_p_count]);
                if($purchases){
                    $responseData = [
                        'status' => config('constants.API.STATUS.SUCCESS'),
                        'code'   => config('constants.API.CODE.SUCCESS'),
                        'message'=> 'Purchase Product Added Successfully',
                        'update_products'=>$total_p_count,
                    ];
                    return response()->json($responseData);
                }else{
                    return response()->json("Something went Wrong");
                }
            }else{
                $responseData = [
                    'status'=>$status,
                    'code'=>$code,
                    'message'=>$validator->errors()->all()
                ];
                return response()->json($responseData);
            }
        }else{
            if($res == "NOTFOUND"){
                $code       = config('constants.API.CODE.NOTFOUND');
                $message    = "Please Provide auth-token in header";
                $status     = config('constants.API.STATUS.NOTFOUND');
            }else{
                $code       = config('constants.API.CODE.UNAUTHORIZED');
                $message    = "please provide valid token";
                $status     = config('constants.API.STATUS.UNAUTHORIZED');
            }
            return response()->json(['code'=>$code, 'status'=>$status, 'message'=>$message ]);
        }
    }
    public function getQuestionAnswer(Request $request)
    {
        $res = $this->auth_token($request);
        if($res != "NOTFOUND" && $res != "UNAUTHORIZED"){
            $validator = Validator::make($request->all(), [
                'genre'       => ['required', 'exists:questions_answers'],
                'total_number_questions' => ['required'],
                'game_id'=> ['required', 'exists:games'],
            ]);
            $code       = config('constants.API.CODE.BADREQUEST');
            $message    = config('constants.API.STATUS.BADREQUEST');
            $status     = config('constants.API.STATUS.BADREQUEST');
            if(!$validator->fails())
            {
                $game_id = DB::table('questions_cache')->where('game_id', $request->input('game_id'))->get();
                if(count($game_id->all())>0){
                    $questions_answers = DB::table('questions_answers')
                        ->join('questions_cache', 'questions_cache.question_answer_id', '=', 'questions_answers.question_answer_id')
                        ->join('games', 'games.game_id', '=', 'questions_cache.game_id')
                        ->where('questions_cache.game_id',$request->input('game_id'))
                        ->select('questions_answers.*')
                        ->get();
                }else{
                    $data = DB::table('questions_answers')->where('genre', $request->input('genre'))->get()->random($request->input('total_number_questions'));
                    foreach($data as $d){
                        $data_array=[
                            'game_id'              => $request->input('game_id'),
                            'question_answer_id' => $d->question_answer_id,
                        ];
                        DB::table('questions_cache')->insertGetId($data_array);
                    }
                    $questions_answers = DB::table('questions_answers')
                        ->join('questions_cache', 'questions_cache.question_answer_id', '=', 'questions_answers.question_answer_id')
                        ->join('games', 'games.game_id', '=', 'questions_cache.game_id')
                        ->where('questions_cache.game_id',$request->input('game_id'))
                        ->select('questions_answers.*')
                        ->get();
                }
                if(count($questions_answers->all())){
                    $responseData = [
                        'status' => config('constants.API.STATUS.SUCCESS'),
                        'code'   => config('constants.API.CODE.SUCCESS'),
                        'message'=> 'Genre Questions',
                        'data'   => $questions_answers 
                    ];
                    return response()->json($responseData);
                }else{
                    return response()->json("Something went Wrong");
                }
            }else{
                $responseData = [
                    'status'=>$status,
                    'code'=>$code,
                    'message'=>$validator->errors()->all()
                ];
                return response()->json($responseData);
            }
        }else{
            if($res == "NOTFOUND"){
                $code       = config('constants.API.CODE.NOTFOUND');
                $message    = "Please Provide auth-token in header";
                $status     = config('constants.API.STATUS.NOTFOUND');
            }else{
                $code       = config('constants.API.CODE.UNAUTHORIZED');
                $message    = "please provide valid token";
                $status     = config('constants.API.STATUS.UNAUTHORIZED');
            }
            return response()->json(['code'=>$code, 'status'=>$status, 'message'=>$message ]);
        }
    }
}
