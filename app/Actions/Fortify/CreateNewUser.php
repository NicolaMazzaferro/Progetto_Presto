<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;
    use WithFileUploads;
    
    /**
    * Validate and create a newly registered user.
    *
    * @param  array<string, string>  $input
    */
    public function create(array $input): User
    {
        
        // Validation - Nicola
        
        $messages = [
            'img_profile.image' => 'L\'immagine del profilo deve essere un\'immagine valida.',
            'img_profile.mimes' => 'L\'immagine del profilo deve essere in uno dei formati: jpeg, png, jpg, gif.',
            'img_profile.max' => 'L\'immagine del profilo non deve superare 1MB.',
            'required' => 'Il campo è obbligatorio.',
            'email.unique' => 'Esiste già un account con questa email.',
            'password_confirmation.same' => 'Le password non corrispondono.',
            'password.min' => 'La password deve contenere almeno 8 caretteri.',
            'phone.numeric' => 'Il numero di telefono deve essere un valore numerico.',
            'phone.digits' => 'Il numero di telefono non è valido.',
        ];
        
        
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'same:password'],
            'img_profile' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:1024'],
        ], $messages)->validate();
        
        $imgPath = isset($input['img_profile']) ? $input['img_profile']->store('public/media') : '/default.jpg'; 
        
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'surname' => $input['surname'],
            'address' => $input['address'],
            'phone' => $input['phone'],
            'img_profile' =>  $imgPath
        ]);
    }
}
