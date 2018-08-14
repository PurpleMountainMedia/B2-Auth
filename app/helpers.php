<?php

/**
 * Generate a random string, using a cryptographically secure
 *
 * @param int $length      How many characters do we want?
 * @param string $keyspace A string of all possible characters
 *                         to select from
 * @return string
 */
function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
    return $str;
}

/**
 * Return the human name for each method
 *
 * @param string $method The name of the method
 * @return string
 */
function getMethodName($method)
{
    switch ($method) {
        case 'POST':
            return 'create';
            break;

        case 'GET':
            return 'read';
            break;

        case 'PUT':
            return 'update';
            break;

        case 'DELETE':
            return 'delete';
            break;

        default:
            return 'update';
            break;
    }
}

/**
 * Return the name for each type of parent property.
 *
 * @param string $request The request
 * @return string
 */
function getRequestParentProperty($request)
{
    $user = $request->user();
    if ($request->organisation) {
        return $user->hasAccessTo($request->organisation) ? $request->organisation->name : 'this organisation';
    }
    if ($request->school) {
        return $user->hasAccessTo($request->school) ? $request->school->name : 'this school';
    }
    return 'this property';
}

/**
 * Determine what is in the include section of the request.
 *
 * @param string $key
 * @return bool
 */
function requestIncludes($key)
{
    $include = request()->include;

    if (!is_array($include)) {
        $include = explode(',', str_replace(' ', '', $include));
    }

    return in_array($key, $include);
}

/**
 * Determine whether to update the attribute from request or keep the same.
 *
 * @param Request $request
 * @param Mixed $model
 * @param string $attribute
 * @param string $request_attribute
 * @return string
 */
function updateOrKeep($request, $model, $attribute, $request_attribute = null)
{
    $merged_attribute = $request_attribute ?: $attribute;
    return $request->has($merged_attribute) ? $request->$merged_attribute : $model->$attribute;
}

function deletionSuccessful()
{
    return [
        'ok' => true
    ];
}

function getB2Config()
{
    return [
      'name' => config('app.name'),
      'site_url' => config('app.url'),
      'api_prefix' => config('app.api_prefix'),
      'logo' => url('storage/b2_logo1.png')
    ];
}
