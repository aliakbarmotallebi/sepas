<?php

namespace App\Http\Controllers\Panel;

use App\Models\Campaign;
use App\Models\Course;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ProfileController extends PanelController
{

    public function index(Request $request)
    {
        $user = $request->user();

        $orders  = Order::whereStatus('PUBLISHED')->count();
        $courses = Transaction::where([
            'transactable_type' => Course::class,
            'owner_id'          => $request->user()->id,
            'status'            => Transaction::COMPLETED_STATUS
        ])->count();
        $campaigns = Transaction::where([
            'transactable_type' => Campaign::class,
            'owner_id'          => $request->user()->id,
            'status'            => Transaction::COMPLETED_STATUS
        ])->count();

        $comments = $request->user()->comments()->paginate(10);

        return view('user.index', 
            compact('user', 'orders', 'courses', 'campaigns', 'comments')
        );
    }

    public function profileEdit(Request $request)
    {
        $user = $request->user();

        return view('user.profile', 
            compact('user')
        );
    }

    public function profileUpdate(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'old_password' => 'required',
            'password' => 'nullable|min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'nullable|min:6'
        ]);

        $data = [
            'fullname' => $request->get('fullname'),
            'address'  => $request->get('address'),
            'bio'      => $request->get('bio'),
        ];

        if(! \Hash::check(
                $request->get('old_password'),
                $request->user()->password
            )){

            alert()->error('گذرواژه جاری اشتباه می باشد');

            return redirect()->back();
       }

       if( $request->filled('password') ){
            $data = array_merge(
                ['password' => $request->get('password') ],
                $data
            );
       }
       
        $request->user()->update($data);

        alert()->success('با موفقیت ویرایش شد!');

        return redirect()->back();
    }

    public function courses(Request $request)
    {
        $courses =  Transaction::where([
            'transactable_type' => Course::class,
            'owner_id'          => $request->user()->id,
            'status'            => Transaction::COMPLETED_STATUS
        ])->paginate(10);

        return view('user.courses', 
            compact('courses')
        );
    }

    public function comments(Request $request)
    {
        $comments = $request->user()->comments()->paginate(10);

        return view('user.comments', 
            compact('comments')
        );
    }

    public function orders(Request $request)
    {
        $orders = $request->user()->orders()->paginate(10);

        return view('user.orders.index', 
            compact('orders')
        );
    }

    public function order(Request $request, Order $order)
    {
        if($request->user()->id !== $order->owner_id){
            return abort(403);
        }

        return view('user.orders.show', 
            [ 'products' => $order ]
        );
    }


    public function campaigns(Request $request)
    {
        $campaigns =  Transaction::where([
            'transactable_type' => Campaign::class,
            'owner_id'          => $request->user()->id,
            'status'            => Transaction::COMPLETED_STATUS
        ])->paginate(10);

        return view('user.campaigns', 
            compact('campaigns')
        );
    }

    public function transactions(Request $request)
    {
        $transactions = $request->user()->transactions()->paginate(10);

        return view('user.transactions', 
            compact('transactions')
        );
    }
}
