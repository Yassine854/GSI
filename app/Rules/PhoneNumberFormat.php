<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumberFormat implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        // Define the pattern for the expected format "(+code)phonenumber"
        $pattern = '/^\(\+\d+\)/';

        // Use preg_match to check if the value starts with the specified pattern
        return preg_match($pattern, $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Ce champ doit commencer par "(+code)".';
    }
}
