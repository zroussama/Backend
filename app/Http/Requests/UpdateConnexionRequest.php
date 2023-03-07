<?php

namespace App\Http\Requests;

use App\Models\Connexion;
use Illuminate\Foundation\Http\FormRequest;

class UpdateConnexionRequest extends FormRequest
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
        $rules = Connexion::$rules;
        
        return $rules;
    }
}
