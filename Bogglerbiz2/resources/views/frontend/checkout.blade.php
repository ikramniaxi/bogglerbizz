<script src="https://js.stripe.com/v3/"></script>

<script>
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');

    stripe.redirectToCheckout({
        sessionId: '{{ $checkout->id }}'
    }).then(function (result) {
        console.log(result)
        // If redirectToCheckout fails due to a browser or network
        // error, you should display the localized error message to your
        // customer using error.message.
        if (result.error) {
            alert(result.error.message);
        }
    });
</script>
