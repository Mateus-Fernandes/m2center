<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidRecaptcha;
class FeedbackRequest extends FormRequest
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
        return [
            'nome_lead' => 'required',
            'email_lead' => 'required|email',
            'telefone_lead' => 'required',
            'mensagem_lead' => 'required',
            'g-recaptcha-response' => ['required']
        ];
    }
    public function messages()
    {
        return [
            'g-recaptcha-response.required' => 'Confirme que você é um humano!'
        ];
    }
}