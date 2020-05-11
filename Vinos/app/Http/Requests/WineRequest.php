<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules= [//start validating everything that the request is receiving
            //left key, must be named as the "name" atribute of the inputs included in the request
            'name'=>'required|min:3|max:25',
            'cost'=>'required|digits_between:3,9',
            'reference'=>'required|min:3|max:10',
            'region'=>'required|min:5|max:40',
            'brand'=>'required|min:3|max:25',
            'color'=>['required',
                        Rule::in(['Red Wine','Pink Wine','White Wine']),
                        'min:7','max:15'],
            'age'=>['required','min:7','max:20',Rule::in(['Crianza','Reserva','Gran Reserva','Beronia Tempranillo','Beronia Tempranillo','Beronia Tempranillo','Beronia Gran Reserva'])],
            'sugar'=>['required','min:4','max:20',Rule::in(['Nature','Brut Nature','Extra Brut','Brut','Demise','Dulce'])],
            'alevel'=>'required|digits_between:1,3'            
        ];
        if($this->method()==='POST'){
            $rules['img']=['required', 'image', 'max:2048'];//TODO: resolver imágenes que no puedo validar ni por mimes;
        }else if($this->method()==='PUT'){

        }

        return $rules;
    }
    
    public function messages()
    {
        return [
            'alevel.required' => 'The alcohol content must be specified.',
            'alevel.digits_between' => 'Amount between :min and :max digits',
        ];
    }
}
