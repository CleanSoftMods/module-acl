<?php namespace WebEd\Base\ACL\Http\Requests;

use WebEd\Base\Core\Http\Requests\Request;

class CreateRoleRequest extends Request
{
    public $rules = [
        'name' => 'required|max:255|string',
        'slug' => 'required|max:255|alpha_dash',
    ];
}
