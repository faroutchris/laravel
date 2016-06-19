<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Route;

class ArticleRequest extends Request
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
        $routeAction = Route::current()->getAction()['as'];
        
        $fieldValidations = [
            'title' => 'required|unique:articles,title',
            'body' => 'required',
            'published_at' => 'required|date'
        ];
        
        // Do not require unique name when updating an article title
        if ($routeAction === 'articles.update') {
            $fieldValidations['title'] = 'required';
        }
        

        return $fieldValidations;
    }
}
