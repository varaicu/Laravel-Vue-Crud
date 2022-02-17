<?php

namespace App\Http\Requests;

use App\Http\Requests\Abstracts\AbstractFormRequest;

class AuthRequest extends AbstractFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $controllerMethod = $this->route()->getActionMethod();
        if ($controllerMethod == 'register') {
            return [
                'name' => 'required|string',
                'surname' => 'required|string',
                'email' => 'required|string|email|unique:users,email',
                'password' => 'required|string|confirmed'
            ];
        }

        if ($controllerMethod == 'login')
        {
            return [
                'email' => 'required|string',
                'password' => 'required|string'
            ];
        }

        return [];
    }
}
