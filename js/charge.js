//crerate stripe client
var stripe = Stripe('pk_test_51HEcfOLpMRyogHBCYdDJcKJ389IblXaiJaP3VLZHibJesf0CERV1fbivduIQznpN9if3FUgUn7Pw6Ph0lPTT1tKw00dAMMnl0Z');
var elements = stripe.element();

var style = {
    base:{
        colur :'#32325d',
        lineHeight: '18px',
        fontFamily: '"Helvetica Neue",Helvetica,sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder':{
            color:'#aab7c4'
        }
    },
    invalid:{
        color:'#fa755a',
        iconColor:'#fa755a'
    }
};



//create an instance of the card element
var card = elements.create('card',{style: style});

//add an instance of the card element into the 'card-element' <div>
card.mount('#card-element');

//Handle real-time validation errors from the card element.
card.addEventListener('change',function(event){
    var displayError = document.getElementByid('card-errors');
    if(event.error){
        displayError.textContent = event.error.message;
    }else{
        displayError.textContext = '';
    }
});
//handle form sbmission
var form = document.getElementById('payment-form');
form.addEventListener('submit',function(event){
    event.preventDefault();

stripe.createToken(card).then(function(result) {
    if(result.error){
        var errorElement = document.getElementById('card-errors');
        errorElement.textContent = result.error.message;
    }else{
        stripeTokenHandler(result.token);
    }
});
});

function stripeTokenHandler(token){
//insert the token ID into the form so it gets submitted to the server 
var form = document.getElementById('payment-form');
var hiddenInput = document.createElement('input');
hiddenInput.setAttribute('type','hidden');
hiddenInput.setAttribute('name','stripeToken');
hiddenInput.setAttribute('value',token.id);
form.appendChild(hiddenInput);
}

form.submit();


