<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatahandleController extends Controller
{
    public function handlePathVariable($id)
    {
        return $id;
    }

    public function handleQueryString(Request $request)
    {
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $email = $request->get('email');
        return view('datahandle', [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email
        ]);
    }

    public function returnForm()
    {
        return view('form-data');
    }

    public function processForm(Request $request)
    {
        $eventName = $request->get('eventName');
        $bandNames = $request->get('bandNames');
        $startDate = $request->get('startDate');
        $endDate = $request->get('endDate');
        $portfolio = $request->get('portfolio');
        $ticketPrice = $request->get('ticketPrice');
        $status = $request->get('status');
        return view('form-success', [
            'eventName' => $eventName,
            'bandNames' => $bandNames,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'portfolio' => $portfolio,
            'ticketPrice' => $ticketPrice,
            'status' => $status
        ]);
    }
}
