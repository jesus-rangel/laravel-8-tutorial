<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoryRequest extends FormRequest
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
        $storyId = $this->route('story.id');
        return [
            'title' => [
                'required', 
                'min:10',
                'max:50',
                Rule::unique('stories')->ignore($storyId),
                function($attribute, $value, $fail)
                {
                    if(strcasecmp($value, 'dummy title') === 0)
                    {
                        $fail(ucwords($attribute) . ' is not valid');
                    }
                }
            ],
            'body' => [
                'required',
                'min:10'
            ],
            'type' => 'required',
            'status' => 'required'
        ];
    }

    public function withValidator($validator)
    {
        $validator->sometimes('body', 'max:200', function($input)
        {
            return 'short' === $input->type;
        });
    }

    public function messages()
    {
        return [
            'required' => 'Please enter ' . ucwords(':attribute')
        ];
    }
}
