// Initialize Google Pay API Client
const paymentsClient = new google.payments.api.PaymentsClient({ environment: 'TEST' });

const paymentDataRequest = {
    apiVersion: 2,
    apiVersionMinor: 0,
    allowedPaymentMethods: [
        // ... Your existing allowed payment methods here
    ],
    merchantInfo: {
        merchantId: 'BCR2DN4T2O37VQQY',
        merchantName: 'TuncaDevelopment'
    },
    transactionInfo: {
        totalPriceStatus: 'FINAL',
        totalPrice: '10.00', // Replace with your actual total price
        currencyCode: 'USD'  // Replace with your actual currency code
    }
};

// Create and append the Google Pay button
function onGooglePayLoaded() {
    const button = paymentsClient.createButton({
        onClick: onGooglePayClicked
    });
    document.getElementById('gpay-button').appendChild(button);
}

// Handle Google Pay Button Click
function onGooglePayClicked() {
    paymentsClient.loadPaymentData(paymentDataRequest)
        .then(function(paymentData) {
            // Handle successful payment here (send paymentData to backend)
            console.log('Payment Success:', paymentData);
        })
        .catch(function(err) {
            console.error('Payment Failed:', err);
        });
}

// Load Google Pay button once DOM is ready
document.addEventListener('DOMContentLoaded', onGooglePayLoaded);
