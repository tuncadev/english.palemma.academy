<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class AddSubscribtionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    function generateInvoiceNumber()
    {
        // Define a unique cache key based on today's date
        $today = date('Ymd');
        $cacheKey = 'invoice_counter_' . $today;

        // Check if the counter exists; if not, initialize it to 1 with a 24-hour expiration
        $counter = Cache::remember($cacheKey,        now()->addDay(), function () {
            return 1;
        });

        // Increment the counter in the cache for each new invoice
        $newCounter = Cache::increment($cacheKey);

        // Format the invoice number
        $invoiceNumber = 'INV-' . $today . '-' . str_pad($newCounter, 5, '0', STR_PAD_LEFT);

        return $invoiceNumber;
    }

    function generateTransactionNumber()
    {
        $transactionID = Str::uuid()->toString();

        return $transactionID;
    }


    public function run(): void
    {
        $currentDate = Carbon::now();
        $plusOneYear = (clone $currentDate)->addYear();


        DB::table('subscribtions')->insert([
            [
                'user_id' => 1,
                'course_id' => 1,
                'payment_status' => 'complete',
                'subscription_date' =>  now(),
                'expiry_date' => $plusOneYear,
                'created_at' => now(),
            ],
            [
                'user_id' => 2,
                'course_id' => 1,
                'payment_status' => 'complete',
                'subscription_date' =>  now(),
                'expiry_date' => $plusOneYear,
                'created_at' => now(),
            ],
        ]);
        DB::table('transactions')->insert([
            [
                'type' => "card",
                'invoice_id' => $this->generateInvoiceNumber(),
                'transaction_id' => $this->generateTransactionNumber(),
                'first_name' => 'Emma',
                'last_name' => 'Palchevskaya',
                'email' => 'emma@palemma.academy',
                'amount' => 2600,
                'discount' => 40,
                'course_id' => 1,
                'status' => 'success',
            ],
            [
                'type' => "card",
                'invoice_id' => $this->generateInvoiceNumber(),
                'transaction_id' => $this->generateTransactionNumber(),
                'first_name' => 'Ozgur Murat',
                'last_name' => 'Tunca',
                'email' => 'ozgurmtunca@gmail.com',
                'amount' => 2600,
                'discount' => 40,
                'course_id' => 1,
                'status' => 'success',
            ],
        ]);
    }
}
