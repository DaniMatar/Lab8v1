<?php namespace App\Http\Requests;



use App\Http\Requests\Request;


class QueryRequest extends Request{


    public function authorize()
    {
        return true;
    }



    public function rules()
    {
        return [




        ];
    }








}