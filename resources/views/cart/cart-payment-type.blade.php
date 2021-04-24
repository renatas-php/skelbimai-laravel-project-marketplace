

<!-- Hedline -->
<h3 class="margin-top-50">Mokėjimo būdas</h3>

<!-- Payment Methods Accordion -->
<div class="payment margin-top-30">

    <div class="payment-type">
        <div class="payment-type-trigger">
            <input class="p1" checked type="radio" name="payment-type" id="payment-type" value="stripe">
            <label for="stripe">Stripe</label>           
        </div>

        <div class="payment-type-content payment-content-active" id="payment-type-content-stripe">
        
                <form action="{{ route('cart-store') }}" method="POST" id="payment-form" class="form-stripe">
                @csrf
                <label for="card-element">Kortelės duomenys</label>
                    <div id="card-element"><!--Stripe.js injects the Card Element--></div>
                    <button id="submit" class="button big ripple-effect">
                        <div class="spinner hidden" id="spinner"></div>
                        <span id="button-text">Apmokėti</span>
                    </button>
                    <p id="card-error" role="alert"></p>
                    <p class="result-message hidden">
                        Payment succeeded, see the result in your
                        <a href="" target="_blank">Stripe dashboard.</a> Refresh the page to pay again.
                    </p>
                </form>
        </div>
    </div>


    <div class="payment-type">
        <div class="payment-type-trigger">
            <input class="p1" type="radio" name="payment-type"  id="payment-type1" value="payp">
            <label for="payp">PayPal</label>
        </div>
        <div class="payment-type-content" id="payment-type-content-paypal">
               <p>ewffffffffff</p>
        </div>
    </div>

</div>
<!-- Payment Methods Accordion / End -->
<button type="submit" class="button big ripple-effect margin-top-40 margin-bottom-65">Proceed Payment</button>
<script>
    let contentPaypal= document.querySelector('#payment-type-content-paypal');
    let contentStripe= document.querySelector('#payment-type-content-stripe');

    document.querySelector('#payment-type').addEventListener('click',  function () {
        contentStripe.classList.add('payment-content-active')
        contentPaypal.classList.remove('payment-content-active')
        });
    document.querySelector('#payment-type1').addEventListener('click',  function () {
        contentPaypal.classList.add('payment-content-active')
        contentStripe.classList.remove('payment-content-active')
        });  
</script>