<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JoinedMember;

class JoinedMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('join_team');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new JoinedMember();
        request()->validate([
            "first_name"=>'required',
            "last_name"=>'required',
            "phone_number"=>'required',
            "email"=>'required|email',
            "age"=>'required|numeric|min:14',
            "region"=>'required',
            "country"=>'required',
            "city"=>'required',
            "language"=>'required',
            "current_academic_position"=>'required',
            "current_academic_institution"=>'required',
            "future_aspirations"=>'required',
            "are_you_interested_in_joining_the_board"=>'required',
            "interests_in_gms"=>'required',
            "where_did_you_hear_from_us"=>'required',
        ]);

        $member->first_name = request('first_name');
        $member->last_name = request('last_name');
        $member->phone_number = request('phone_number');
        $member->email = request('email');
        $member->age = request('age');
        $member->region = request('region');
        $member->country = request('country');
        $member->city = request('city');
        $member->language = request('language');
        $member->current_academic_position = request('current_academic_position');
        $member->current_academic_institution = request('current_academic_institution');
        $member->future_aspirations = request('future_aspirations');
        $member->are_you_interested_in_joining_the_board = request('are_you_interested_in_joining_the_board');
        $member->interests_in_gms = request('interests_in_gms');
        $member->where_did_you_hear_from_us = request('where_did_you_hear_from_us');
        
        if (request('questions') == null) {
            $member->questions = "no questions";
        }else{
            $member->questions = request('questions');
        }
        $member->save();
        return redirect()->back()->with('message', 'Thank you for applying. We will get back to you shortly!');
    }
}