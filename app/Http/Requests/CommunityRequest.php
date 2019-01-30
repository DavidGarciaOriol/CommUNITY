<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CommunityRequest extends FormRequest{

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'name' => 'required|min:3',
            'creator_nickname' => 'required|min:3',
            'max_users' => 'required',
            'genre' => 'required|min:3',
            'description' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=> 'El :attribute es requerido.',
            'name.min' => 'El :attribute debe tener 3 carácteres o más.',
            'creator_nickname.required' => 'El :attribute es requerido.',
            'creator_nickname.min' => 'El :attribute debe tener 3 cararácteres o más.',
            'genre.required' => 'El :attribute es requerido.',
            'genre.min' => 'El :attribute debe tener 3 carácteres o más.',
            'description.required' => 'La :attribute es requerida.',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'nombre de la comunidad',
            'creator_nickname' => 'nickname del creador de la comunidad',
            'description' => 'descripción de la comunidad',
            'genre' => 'género de música de la sala'
        ];
    }
}

?>
