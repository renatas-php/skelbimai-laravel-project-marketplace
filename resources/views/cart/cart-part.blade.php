	<!-- Hedline -->
    <h3 class="margin-top-50">Pristatymo adresas</h3>

<!-- Shipping Adress -->
<div class="payment margin-top-30">

@if(!empty(auth()->user()->userInfos->shipping) || !empty(auth()->user()->shippingAdress))
    <div class="payment-tab payment-tab-active">
        <div class="payment-tab-trigger">
            <input checked name="adress_ship" id="paypal" type="radio" value="paypal">
            <label for="paypal">Naudoti esama adresą</label>
            <img class="payment-logo paypal" src="https://i.imgur.com/ApBxkXU.png" alt="">
        </div>

        <div class="payment-tab-content">
            @if(!empty(auth()->user()->shippingAdress))
            <p>{{ auth()->user()->shippingAdress->name }} </p> 
            <p> {{ auth()->user()->shippingAdress->adress }}, 
            {{ auth()->user()->shippingAdress->city }}, {{ auth()->user()->shippingAdress->post }}</p>
            <p>{{ auth()->user()->shippingAdress->phone }} </p> 
            @else
            <p>{{ auth()->user()->userInfos->shipping['name'] }} </p> 
            <p> {{ auth()->user()->userInfos->shipping['adress'] }}, 
            {{ auth()->user()->userInfos->shipping['city'] }}, {{ auth()->user()->userInfos->shipping['post'] }}</p>
            <p>{{ auth()->user()->userInfos->shipping['phone'] }} </p> 
            @endif
        </div>
    </div>
@endif

    <div class="payment-tab">
        <div class="payment-tab-trigger">
            <input type="radio" name="adress_ship" id="creditCart" value="creditCard">
            <label for="creditCart">Įvesti kitą adresą</label>
        </div>
    <form action="{{ route('sold-store') }}" method="POST">
    @csrf
        <div class="payment-tab-content">
            <div class="row payment-form-row">
            
                <div class="col-md-6">
                    <div class="card-label">
                        <input id="" name="name" type="text" placeholder="Vardas Pavardė">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card-label">
                        <input id="" name="phone" placeholder="Tel. nr." type="text">
                    </div>
                </div>							

                <div class="col-md-4">
                    <div class="card-label">
                        <input id="" name="adress" placeholder="Gatvė ir namo numeris" type="text">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-label">									
                        <input id="" name="city" placeholder="Miestas" type="text">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-label">
                        <input id="" name="post" type="text" placeholder="Pašto kodas">
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</div>
<!-- Shipping Adress End -->

</form>

@include('cart.cart-payment-type')

</div>