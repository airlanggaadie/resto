<?php
namespace App\Repository;

use App\Booking;

class BookingRepository
{
    protected $booking;

    public function __construct(Booking $booking) {
        $this->booking = $booking;
    }

    public function create($data)
    {
        $this->booking->users_id = $data['user_id'];
        $this->booking->tables_id = $data['table_id'];
        $this->booking->check_in = $data['check_in']; //
        $this->booking->time = $data['time']; //
        $this->booking->save();
        return $this->booking;
    }

    public function read()
    {
        return $this->booking->get();
    }

    public function update($data,$id)
    {
        $booking = $this->booking->findOrFail($id);
        $booking->users_id = $data['user_id'];
        $booking->tables_id = $data['table_id'];
        $booking->check_in = $data['check_in'];
        $booking->time = $data['time'];
        $booking->save();
        return $booking;
    }

    public function delete($id)
    {
        $booking = $this->booking->findOrFail($id);
        $booking->delete();
        return $booking;
    }
}
