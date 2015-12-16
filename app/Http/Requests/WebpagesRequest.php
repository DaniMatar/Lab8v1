<?php namespace App\Http\Requests;



use App\Http\Requests\Request;


class WebpagesRequest extends Request{


    public function authorize()
    {
        return true;
    }



    public function rules()
    {
        return [

//            'name' => 'required|min: 5',
//            'published_at' => 'required|date',


        ];
    }








}