<?php

namespace App\Livewire\Customers;

use App\Models\UserBookings;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class BookNowModal extends ModalComponent
{
    public $adults;
    public $package;
    public $children;
    public $booking_date;
    public $closeModal = false;

    public $first_name;
    public $second_name;
    public $email;
    public $phone;
    public $checkin_date;
    public $checkout_date;
    public $trip_preferences;
    public $user_booking;

    protected $listeners = [
        'openModal' => 'openModal',
    ];

    public function openModal($data)
    {
        $this->package = $data['package'];
        $this->adults = $data['adults'];
        $this->children = $data['children'];
        $this->booking_date = $data['booking_date'];
        $dates = explode(' - ', $this->booking_date);
        $this->checkin_date = $dates[0];
        $this->checkout_date = $dates[1];
        $this->dispatch('launchModal');
    }

    public function render()
    {
        return view('livewire.customers.book-now-modal');
    }

    function CompleteBooking(): void
    {
        $this->validate([
            'first_name' => 'required',
            'second_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'trip_preferences' => 'required',
        ]);
        try {
            DB::beginTransaction();
            $booking = new UserBookings();
            $booking->user_name = $this->first_name . ' ' . $this->second_name;
            $booking->user_email = $this->email;
            $booking->user_phone = $this->phone;
            $booking->checkin_date = $this->checkin_date;
            $booking->checkout_date = $this->checkout_date;
            $booking->additional_info = $this->trip_preferences;
            $booking->tours_packages_id = $this->package['id'];
            $booking->total_adults = $this->adults;
            $booking->total_children = $this->children;
            $booking->status = 'pending';
            $booking->payment_status = 'unpaid';
            $booking->terms_conditions = 'accepted';
            $booking->save();
            DB::commit();
            $this->user_booking = 'Booking completed successfully';
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            $this->user_booking = $th->getMessage();
        }
    }
}
