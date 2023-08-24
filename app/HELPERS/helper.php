<?php

/**
 * This helper function returns the right boostrap class (either .is-valid or .is-invalid)
 * use it to style your forms correctly
 * to use it somply pass the $errors global variable and the $fieldName of your input field
 * 🍀 See this tutorial to know how to create helper functions https://www.itsolutionstuff.com/post/laravel-9-create-custom-helper-functions-exampleexample.html
 * 🍀 Follow Step 3 very very carefully :
 *      - don't forget to run "composer dump-autoload" after you create the helper
 *      - in composer.json add "files" under "autoload" !
 */
if (! function_exists('input_validity')) {
    function input_validity($errors, $fieldName) {
        $class = ''; // by default, the field is neirer valid nor invalid (the form was not submitted yet)
        if ($errors->has($fieldName)) { // if there are any erros under the field name, it's invalid
            $class = 'is-invalid';
        } elseif (old($fieldName)) { // else if the field has an old value (was submitted), it's valid
            $class = 'is-valid';
        }
        return $class;
    }
}
