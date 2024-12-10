<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function showForm()
    {
        return view('donation.form');
    }

    // Handle the donation form submission
    public function processDonation(Request $request)
    {
        // Validate the donation amount and payment method
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'payment_method' => 'required|in:gcash,paymaya,paypal,credit_card',
        ]);

        $amount = $request->input('amount');
        $paymentMethod = $request->input('payment_method');

        // Process the donation based on the selected payment method
        switch ($paymentMethod) {
            case 'gcash':
                return $this->handleGcashPayment($amount);
            case 'paymaya':
                return $this->handlePaymayaPayment($amount);
            case 'paypal':
                return $this->handlePaypalPayment($amount);
            case 'credit_card':
                return $this->handleCreditCardPayment($amount);
            default:
                return redirect()->back()->with('error', 'Invalid payment method');
        }
    }

    // Placeholder methods for handling different payment gateways
    protected function handleGcashPayment($amount)
    {
        // Integrate GCash API here
        return redirect()->route('donation.success')->with('success', "Thank you for donating ₱$amount via GCash!");
    }

    protected function handlePaymayaPayment($amount)
    {
        // Integrate PayMaya API here
        return redirect()->route('donation.success')->with('success', "Thank you for donating ₱$amount via PayMaya!");
    }

    protected function handlePaypalPayment($amount)
    {
        // Integrate PayPal API here
        return redirect()->route('donation.success')->with('success', "Thank you for donating ₱$amount via PayPal!");
    }

    protected function handleCreditCardPayment($amount)
    {
        // Integrate Credit/Debit Card API here (Stripe, etc.)
        return redirect()->route('donation.success')->with('success', "Thank you for donating ₱$amount via Credit/Debit Card!");
    }
}
