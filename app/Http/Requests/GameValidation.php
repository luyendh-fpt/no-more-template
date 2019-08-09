<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameValidation extends FormRequest
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
            'name' => 'required|max:50|min:10',
            'thumbnail' => 'required',
            'price' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên trò chơi',
            'name.min' => 'Tên quá ngắn, vui lòng nhập ít nhất 10 ký tự.',
            'name.max' => 'Tên quá dài, vui lòng nhập nhiều nhất 50 ký tự.',
            'thumbnail.required' => 'Vui lòng nhập ảnh cho trò chơi',
            'price.required' => 'Vui lòng nhập giá cho sản phẩm'
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $name = $this -> get('name');
            if($name == 'Sex'){
                $validator->errors()->add('name', 'Tên không phù hợp, sử dụng từ ngữ không đúng với thuần phong mỹ tục!');
            }
        });
    }

}
