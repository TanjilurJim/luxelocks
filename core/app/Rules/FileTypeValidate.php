<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class FileTypeValidate implements Rule
{
    protected $extensions;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($extensions)
    {

        $this->extensions = $extensions;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $extension = strtolower($value->getClientOriginalExtension());
    $mimeType = $value->getMimeType();

    $validMimeTypes = [
        'jpeg' => ['image/jpeg'],
        'jpg'  => ['image/jpeg'],
        'png'  => ['image/png'],
        'webp' => ['image/webp']
    ];

    return in_array($extension, $this->extensions) &&
           isset($validMimeTypes[$extension]) &&
           in_array($mimeType, $validMimeTypes[$extension]);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute file type is not supported.';
    }
}
