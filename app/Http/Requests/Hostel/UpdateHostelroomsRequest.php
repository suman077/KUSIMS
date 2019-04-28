<?php
namespace App\Http\Requests\Hostel;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHostelroomsRequest extends FormRequest
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
            
            'block_id' => 'required',
            'room' => 'required',
        ];
    }
}