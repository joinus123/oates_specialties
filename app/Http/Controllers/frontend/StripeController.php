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
         $intent = \Stripe\PaymentIntent::create([
             'amount' => \Cart::getTotal()."00",
             'currency' => 'usd',
             // Verify your integration in this guide by including this parameter
             'metadata' => ['integration_check' => 'accept_a_payment'],
           ]);
 
           //return response()->json([ 'id' => $session->id ],200);
          
     
  
           $resultResponse = \Stripe\Token::create([
            "card" => [
                "number" => $request->ccnumber,
                "exp_month" => $request->ccmonth,
                "exp_year" => $request->ccyear,
                "cvc" => $request->cvc
            ]
        ]);
        //Create Stripe Customer - Starts Here
        $token = $resultResponse['id']; // use this token to create a customer
        
        
        $customer = \Stripe\Customer::create(array(
            'email' => $request->email,
            'source' => $token
        ));
        $customerId = $customer->id;
        //update customerid of stripe in users tabl
        
               
            $charge = \Stripe\Charge::create(array(
                'customer' => $customerId,
                'amount' => \Cart::getTotal()."00",
                'currency' => 'usd',
                'description'=> 'subscription payment'
            ));
        
        
        

        
         
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
            \Cart::clear();
            return redirect()->route('order-status')->with('message', 'payment is successfully done!');
          
        return back();
    }
}
   



