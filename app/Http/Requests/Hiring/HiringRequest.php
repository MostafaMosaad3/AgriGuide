<?php

namespace App\Http\Requests\Hiring;

use Illuminate\Foundation\Http\FormRequest;

class HiringRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['required' , 'string'],
            'email'=>['required' , 'email'] ,
            'university'=>['string' , 'nullable'] ,
            'degree'=>['string' , 'nullable'] ,
            'major'=>['string' , 'nullable'] ,
            'graduation_date'=>['date' , 'nullable'] ,
            'company'=>['string' , 'nullable'] ,
            'position'=>[ 'string' , 'nullable'] ,
            'start_date'=>['date' , 'nullable'] ,
            'end_date'=>[ 'date' , 'nullable'] ,
        ];
    }
}
