@extends(getTemplate().'.layouts.app')

@push('styles_top')
<style>
    .credit-card{
 background-color: #f4f4f4;
  height: 100vh;
  width: 100%;

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.card-holder {
  margin: 2em 0;
}

.img-box {
 padding-top: 20px;
 display: flex;
 justify-content: center;
}
.card-box {
  font-weight: 800;
  padding: 1em 1em;
  border-radius: 0.25em;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
.bg-news {
  background: -webkit-linear-gradient(70deg, #f54d70 40%, #ffffff 40%);
  background: -o-linear-gradient(70deg, #f54d70 40%, #ffffff 40%);
  background: -moz-linear-gradient(70deg, #f54d70 40%, #ffffff 40%);
  background: linear-gradient(70deg, #f54d70 40%, #ffffff 40%);
}
.btn-primary{
 background-image: -webkit-linear-gradient(315deg, #f54d70 0%, #fd8965 100%);
background-image: -moz- oldlinear-gradient(315deg, #f54d70 0%, #fd8965 100%);
background-image: -o-linear-gradient(315deg, #f54d70 0%, #fd8965 100%);
background-image: linear-gradient(135deg, #f54d70 0%, #fd8965 100%);
-webkit-filter: hue-rotate(0deg);
filter: hue-rotate(0deg);
border: none !important;
}

.credit-card form{
	background-color: #ffffff;
	padding: 0;
	max-width: 600px;
	margin: auto;
}

.credit-card .title{
	font-family: 'Abhaya Libre', serif;
	font-size: 1em;
	color: #2C3E50;
	border-bottom: 1px solid rgba(0,0,0,0.1);
	margin-bottom: 0.8em;
	font-weight: 600;
	padding-bottom: 8px;
}
.credit-card .card-details{
	padding: 25px 25px 15px;
}

.inner-addon {
  position: relative;
}

.inner-addon .fas, .inner-addon .far {
  position: absolute;
  padding: 10px;
  pointer-events: none;
  color: #bcbdbd !important;
}
.right-addon .fas, .right-addon .far { right: 0px; top: 40px;}
.right-addon input { padding-right: 30px; }

.credit-card .card-details label{
	font-family: 'Abhaya Libre', serif;
	font-size: 14px;
	font-weight: 400;
	margin-bottom: 15px;
	color: #79818a;
	text-transform: uppercase;
}

.credit-card .card-details input[type="text"] {
	font-family: "Poppins", sans-serif;
	font-size: 16px;
	font-weight: 500;
	padding: 10px 10px 10px 5px;
	-webkit-appearance: none;
	display: block;
	background: #fafafa;
	color: #636363;
	border: none;
	border-radius: 0;
	border-bottom: 1px solid #757575;
}
.credit-card .card-details input[type="text"]:focus { outline: none; }

.credit-card .card-details button{
	margin-top: 0.6em;
	padding:12px 0;
	font-weight: 600;
}

.credit-card .date-separator{
 	margin-left: 10px;
    margin-right: 10px;
    margin-top: 5px;
}

@media (max-width: 768px) {
	.credit-card{
	  height: 250vh;
	  width: 100%;
	}
	.credit-card .title {
		font-size: 1.2em;
	}

	.credit-card .row .col-lg-6 {
		margin-bottom: 40px;
  	}
  	.credit-card .card-details {
    	padding: 40px 40px 30px;
    }

  	.credit-card .card-details button {
    	margin-top: 2em;
    }
}
</style>

@endpush

@section('content')
    <section class="cart-banner position-relative text-center">
        <h1 class="font-30 text-white font-weight-bold">{{ trans('cart.checkout') }}</h1>
        <span class="payment-hint font-20 text-white d-block">{{'$' . $total . ' ' .  trans('cart.for_items',['count' => $count]) }}</span>
    </section>

    <section class="container mt-45">
        <h2 class="section-title">{{ trans('financial.select_a_payment_gateway') }}</h2>

        <form action="/payments/payment-request" method="post" class=" mt-25"  id="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}">
            {{ csrf_field() }}
            <input type="hidden" name="order_id" value="{{ $order->id }}">
            <input type="hidden" name="order_id" value="{{ $order->id }}">
            <input id="key" type="hidden" name="stripe_key" value="{{ env('STRIPE_KEY') }}">

            <div class="row">
                @if(!empty($paymentChannels))
                    @foreach($paymentChannels as $paymentChannel)
                        <div class="col-6 col-lg-4 mb-40 charge-account-radio card"  id="card">
                            <input type="radio" name="gateway" id="{{ $paymentChannel->title }}" data-class="{{ $paymentChannel->class_name }}" value="{{$paymentChannel->id}}">
                            <label for="{{ $paymentChannel->title }}" class="rounded-sm p-20 p-lg-45 d-flex flex-column align-items-center justify-content-center">
                                <img src="{{ $paymentChannel->image }}" width="120" height="60" alt="">

                                <p class="mt-30 mt-lg-50 font-weight-500 text-dark-blue">
                                    {{ trans('financial.pay_via') }}
                                    <span class="font-weight-bold font-14">{{ $paymentChannel->title }}</span>
                                </p>
                            </label>
                        </div>
                    @endforeach
                @endif

                <div class="col-6 col-lg-4 mb-40 charge-account-radio">
                    <input type="radio" @if(empty($userCharge) or ($total > $userCharge)) disabled @endif name="gateway" id="offline" value="credit">
                    <label for="offline" class="rounded-sm p-20 p-lg-45 d-flex flex-column align-items-center justify-content-center">
                        <img src="/assets/default/img/activity/pay.svg" width="120" height="60" alt="">

                        <p class="mt-30 mt-lg-50 font-weight-500 text-dark-blue">
                            {{ trans('financial.account') }}
                            <span class="font-weight-bold">{{ trans('financial.charge') }}</span>
                        </p>

                        <span class="mt-5">{{ $currency }}{{ $userCharge }}</span>
                    </label>
                </div>
            </div>
            <div class="row " id="cardarea" style="display: none">
                <div class="panel-body">




                   <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required' id="example2-card-number">
                                <label class='control-label'>Card Number</label>
                                <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label>
                                <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required' >
                                <label class='control-label'>Expiration Month</label>
                                <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label>
                                <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>




                </div>
            </div>



            <div class="d-flex align-items-center justify-content-between mt-45">
                <span class="font-16 font-weight-500 text-gray">{{ trans('financial.total_amount') }} {{ $currency }}{{ $total }}</span>
                <button data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" type="button" id="paymentSubmit" disabled class="btn btn-sm btn-primary">{{ trans('public.start_payment') }}</button>
            </div>
        </form>
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">


</script>

        @if(!empty($razorpay) and $razorpay)
            <form action="/payments/verify/Razorpay" method="get">
                <input type="hidden" name="order_id" value="{{ $order->id }}">

                <script src="https://js.stripe.com/v2/">
                        data-key="{{ env('STRIPE_KEY') }}"
                        data-amount="{{ (int)($order->total_amount * 100) }}"
                        data-buttontext="product_price"
                        data-description="Stripe"
                        data-currency="{{ currency() }}"

                        data-prefill.name="{{ $order->user->full_name }}"
                        data-prefill.email="{{ $order->user->email }}"
                        data-theme.color="#43d477">
                </script>
            </form>
        @endif
    </section>

@endsection

@push('scripts_bottom')

    <script src="/assets/default/js/parts/payment.min.js"></script>

@endpush
