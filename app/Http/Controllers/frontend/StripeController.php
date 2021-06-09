<?php
namespace App\Http\Controllers\frontend;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use  Stripe;
use  Session;

class StripeController extends Controller
{
    public function handleGet()
    {
        return view('frontend.checkout');
    }
  
    /**
     * handling payment with POST
     */
    public function handlePost(Request $request)
    {   
        
        // dd($request->all());
         // Enter Your Stripe Secret
      

         \Stripe\Stripe::setApiKey(getenv('STRIPE_SECRET'));
        		
         $amount = 100;
         $amount *= 100;
         $amount = (int) $amount;
         
         \Stripe\Stripe::setApiKey(getenv('STRIPE_SECRET'));
         $intent = \Stripe\PaymentIntent::create([
                "amount" => 120 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Make payment and chill." 
        ]);
  
        \Stripe\Token::create([
            "card" => [
                "number" => $request->ccnumber,
                "exp_month" => $request->ccmonth,
                "exp_year" => "2021",
                "cvc" => $request->cvc
            ]
        ]);
 
        
    
         
            $checkout=[
           
            'full_name'=>$request->full_name,
            'last_name'=>$request->last_name,
            'address'=>$request->address,
            'city'=>$request->city,
            'select_state'=>$request->state,
            'zipcode'=>$request->zipcode,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'select_state'=>$request->select_state,
            'select_country'=>$request->select_country,
            'additional_brief'=>$request->additional_brief,
            'shipping_address'=>$request->shipping_address,
            'billing_address'=>$request->billing_address,
             
            "number" => $request->ccnumber,
                "exp_month" => $request->ccmonth,
                "exp_year" => "2021",
                "cvc" => $request->cvc
          
            
            ];
            Checkout::insert($checkout);
          
            return redirect()->route('order-status')->with('success_msg', 'Item is Added to Cart!');
          
        return back();
    }
}
   



