<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Traits\FormatResponseFormRequest;
class ValidateTokenRequest extends FormRequest
{
    use FormatResponseFormRequest;
    public function authorize()
    {
        return true;
    }

    public function all($keys = null)
    {
        $data = parent::all();
        $data['token'] = $this->route('token');

        return $data;
    }

    public function rules()
    {
        return [
            'token' => ['required', Rule::in(config('telegram.token'))]
        ];
    }
}
