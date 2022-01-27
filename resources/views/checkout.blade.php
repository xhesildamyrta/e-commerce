@extends('layouts.app')
<script src="https://js.stripe.com/v3/"></script>
@section('content')
<div class="container mx-auto px-4 xl:px-32">
    <h1 class="lg:text-lg">Hekto Demo</h1>
    <p class="text-gray-400">Cart/Information/Shipping/Payment</p>
    <div class="flex flex-col lg:flex-row gap-x-10 my-4 md:my-14">
        <div class="section1 bg-slate-100  lg:w-2/3">
            <div class="px-5 py-5 md:py-10">
                <h1>Shipping Address</h1>
                <form action="{{ route('checkout-store') }}" method="POST" id="payment-form">
                    {{ csrf_field() }}
                    <div class="flex flex-col gap-y-2 md:gap-y-6 mt-4 md:mt-10">
                        @if (auth()->user())
                        <div class="flex flex-col gap-y-2">
                            <input type="email" id="email" name="email" class="bg-slate-100 focus:outline-none" value="{{ auth()->user()->email }}" readonly>
                            <hr class="text-gray-400">
                        </div>
                        @else
                        <div class="flex flex-col gap-y-2">
                            <input type="text" id="email" name="email" class="bg-slate-100 focus:outline-none" value="{{ old('email') }}" placeholder="Email" required>
                            <hr class="text-gray-400">
                        </div>
                        @endif
                        <div class="flex flex-col gap-y-2">
                            <input type="text" id="name" name="name" class="bg-slate-100 focus:outline-none" value="{{ old('name') }}"  placeholder="Name" required>
                            <hr class="text-gray-400">
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <input type="text" id="address" name="address" class="bg-slate-100 focus:outline-none" value="{{ old('address') }}" placeholder="Address">
                            <hr class="text-gray-400">
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <input type="text" id="city" name="city" class="bg-slate-100 focus:outline-none" value="{{ old('city') }}" placeholder="City">
                            <hr class="text-gray-400">
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <input type="text" id="province" name="province" class="bg-slate-100 focus:outline-none" value="{{ old('province') }}" placeholder="Province">
                            <hr class="text-gray-400">
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <input type="text" id="postalcode" name="postalcode" class="bg-slate-100 focus:outline-none" value="{{ old('postalcode') }}" placeholder="Postal Code">
                            <hr class="text-gray-400">
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <input type="text" id="phone" name="phone" class="bg-slate-100 focus:outline-none" value="{{ old('phone') }}" placeholder="Phone">
                            <hr class="text-gray-400">
                        </div>
                        <div class="flex flex-col gap-y-1">
                            <label class="pay italic">Name On Card</label>
                            <input type="text" id="name_on_card" name="name_on_card" value="" class="bg-slate-100 focus:outline-none">
                            <hr class="text-gray-400">
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <label class="italic" for="card-element"> Credit or debit card</label>
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>
                            <!-- Used to display Element errors. -->
                            <div id="card-errors" role="alert" id="alert"></div>
                            <hr class="text-gray-400">
                        </div>
                        <div class="flex flex-col sm:flex-row justify-between">
                            <button type="submit" id="complete-order" class="bg-pink-500 py-2 text-center text-white font-semibold mt-5  md:mt-20 sm:w-60 rounded-md">Complete Order</button>
                            <a href="{{ route('shopping-cart') }}">
                                <button type="button"  class="w-full bg-pink-500 py-2 text-center text-white font-semibold mt-5  md:mt-20 sm:w-60 rounded-md">Back To Cart</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="section2 flex flex-row lg:flex-col  justify-between lg:w-1/3 mt-10 lg:mt-0">
            <div class="flex flex-col gap-y-5 ">
                @foreach (Cart::content() as $item)
                <div class="flex justify-between place-items-center">
                    <div class="flex">
                        <div class="w-28 h-28">
                            <img src="{{ asset('img/' . $item->model->photoURL) }}" class="w-24 h-20">
                        </div>
                        <div class="">
                            <h1 class="text-lg">{{ $item->model->title }}</h1>
                            <p class="text-gray-400">Color: {{ $item->model->color }}</p>
                            <p class="text-gray-400">Release Year: {{ $item->model->yearOfRelease }}</p>
                            <p class="text-gray-400">Rating: {{ $item->model->rating }}</p>
                        </div>
                    </div>
                    <div class="">
                        <h1 class="text-lg">$ {{ $item->model->price }}</h1>
                    </div>
                </div>
                <div>
                    <hr class="text-gray-400">
                </div>
                <div class="flex justify-between">
                    <h1>Totals</h1>
                    <p>{{ '$' . Cart::total() }}</p>
                </div>
                <div>
                    <hr class="text-gray-400">
                </div>
                @endforeach
            </div>   
        </div>
        <!--end section 2-->
    </div>
    <!--wrapper end-->
</div>
<script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>
<script>
    (function() {
        var stripe = Stripe('pk_test_51JZi8WCrq1Uo3gNLhgDQTC96CxTgmM3FQpxCSdtTXSMlBVhC2HM3k5m9hCxsy0Eg4PVX3y3V9sc54BEn7QNSN4lD004ATFRluN');
        var elements = stripe.elements();
        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        var card = elements.create('card', {
            style: style,
            hidePostalCode: true
        });
        card.mount('#card-element');
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('complete-order').disabled = true;
            var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalcode').value
            }
            stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                    document.getElementById('complete-order').disabled = false;
                } else {
                    stripeTokenHandler(result.token);
                }
            });
        });
        function stripeTokenHandler(token) {
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            form.submit();
        }
    })();
</script>
@endsection